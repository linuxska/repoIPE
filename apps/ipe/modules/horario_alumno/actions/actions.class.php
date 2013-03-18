<?php

require_once dirname(__FILE__).'/../lib/horario_alumnoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/horario_alumnoGeneratorHelper.class.php';

/**
 * horario_alumno actions.
 *
 * @package    ipe
 * @subpackage horario_alumno
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class horario_alumnoActions extends autoHorario_alumnoActions
{
	
  public function preExecute()
  {
    $this->configuration = new horario_alumnoGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new horario_alumnoGeneratorHelper();

    parent::preExecute();
  }

  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
    $c = new Criteria;
    $c->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
    $c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID, Criteria::JOIN);
    $c->add(AlumnoPeer::NUMERO_CONTROL, $this->getUser()->getUsername(), Criteria::EQUAL);
    $c->add(CursoPeer::ANNO, date('Y', time()), Criteria::EQUAL);
    
    $c->addDescendingOrderByColumn(CursoPeer::ANNO);

    $this->listas = ListaPeer::doSelect($c);
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@alumno_horario_alumno');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@alumno_horario_alumno');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->Alumno = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->Alumno = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->Alumno = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->Alumno);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->Alumno = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->Alumno);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');

    $this->redirect('@alumno_horario_alumno');
  }

  public function executeBatch(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    if (!$ids = $request->getParameter('ids'))
    {
      $this->getUser()->setFlash('error', 'You must at least select one item.');

      $this->redirect('@alumno_horario_alumno');
    }

    if (!$action = $request->getParameter('batch_action'))
    {
      $this->getUser()->setFlash('error', 'You must select an action to execute on the selected items.');

      $this->redirect('@alumno_horario_alumno');
    }

    if (!method_exists($this, $method = 'execute'.ucfirst($action)))
    {
      throw new InvalidArgumentException(sprintf('You must create a "%s" method for action "%s"', $method, $action));
    }

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($action)))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $validator = new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Alumno'));
    try
    {
      // validate ids
      $ids = $validator->clean($ids);

      // execute batch
      $this->$method($request);
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items as some items do not exist anymore.');
    }

    $this->redirect('@alumno_horario_alumno');
  }

  protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $count = 0;
    foreach (AlumnoPeer::retrieveByPks($ids) as $object)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $object)));

      $object->delete();
      if ($object->isDeleted())
      {
        $count++;
      }
    }

    if ($count >= count($ids))
    {
      $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items.');
    }

    $this->redirect('@alumno_horario_alumno');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $Alumno = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Alumno)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@alumno_horario_alumno_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'alumno_horario_alumno_edit', 'sf_subject' => $Alumno));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

  protected function getFilters()
  {
    return $this->getUser()->getAttribute('horario_alumno.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('horario_alumno.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('Alumno');
    $pager->setCriteria($this->buildCriteria());
    $pager->setPage($this->getPage());
    $pager->setPeerMethod($this->configuration->getPeerMethod());
    $pager->setPeerCountMethod($this->configuration->getPeerCountMethod());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('horario_alumno.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('horario_alumno.page', 1, 'admin_module');
  }

  protected function buildCriteria()
  {
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $criteria = $this->filters->buildCriteria($this->getFilters());

    $this->addSortCriteria($criteria);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $criteria);
    $criteria = $event->getReturnValue();

    return $criteria;
  }

  protected function addSortCriteria($criteria)
  {
    if (array(null, null) == ($sort = $this->getSort()))
    {
      return;
    }

    $column = AlumnoPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
    if ('asc' == $sort[1])
    {
      $criteria->addAscendingOrderByColumn($column);
    }
    else
    {
      $criteria->addDescendingOrderByColumn($column);
    }
  }

  protected function getSort()
  {
    if (null !== $sort = $this->getUser()->getAttribute('horario_alumno.sort', null, 'admin_module'))
    {
      return $sort;
    }

    $this->setSort($this->configuration->getDefaultSort());

    return $this->getUser()->getAttribute('horario_alumno.sort', null, 'admin_module');
  }

  protected function setSort(array $sort)
  {
    if (null !== $sort[0] && null === $sort[1])
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('horario_alumno.sort', $sort, 'admin_module');
  }

  protected function isValidSortColumn($column)
  {
    return in_array($column, BasePeer::getFieldnames('Alumno', BasePeer::TYPE_FIELDNAME));
  }

}

