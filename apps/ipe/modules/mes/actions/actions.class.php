<?php

require_once dirname(__FILE__).'/../lib/mesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mesGeneratorHelper.class.php';

/**
 * mes actions.
 *
 * @package    ipe
 * @subpackage mes
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class mesActions extends autoMesActions
{


    public function preExecute() {
        $this->configuration = new mesGeneratorConfiguration();

        if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName()))) {
            $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
        }

        $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

        $this->helper = new mesGeneratorHelper();
    }

    public function executeIndex(sfWebRequest $request) {
        // sorting
        if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort'))) {
            $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page')) {
            $this->setPage($request->getParameter('page'));
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();
    }

    public function executeFilter(sfWebRequest $request) {
        $this->setPage(1);

        if ($request->hasParameter('_reset')) {
            $this->setFilters($this->configuration->getFilterDefaults());

            $this->redirect('@mes');
        }

        $this->filters = $this->configuration->getFilterForm($this->getFilters());

        $this->filters->bind($request->getParameter($this->filters->getName()));
        if ($this->filters->isValid()) {
            $this->setFilters($this->filters->getValues());

            $this->redirect('@mes');
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        $this->setTemplate('index');
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Mes = $this->form->getObject();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Mes = $this->form->getObject();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->Mes = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Mes);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->Mes = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Mes);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        /*
         * Un mes no debe ser borrado. Pero si es el caso, solo se borra si no esta asociado a un periodo.
         */
        if (MesPeer::doCount(MesPeer::getMesForPeriodoCriteria($this->getRoute()->getObject()))) {
            $this->getUser()->setFlash('error', 'El elemento no ha sido borrado debido a que tiene periodos asociados.');

            $this->redirect('@mes');
        }

        $this->getRoute()->getObject()->delete();

        $this->getUser()->setFlash('notice', 'El elemento ha sido borrado.');

        $this->redirect('@mes');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El Elemento se ha actualizado correctamente.';

            $Mes = $form->save();

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Mes)));

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' Usted puede agregar otro abajo.');

                $this->redirect('@mes_new');
            } else {
                $this->getUser()->setFlash('notice', $notice);

                $this->redirect(array('sf_route' => 'mes_edit', 'sf_subject' => $Mes));
            }
        } else {
            $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        }
    }

    protected function getFilters() {
        return $this->getUser()->getAttribute('mes.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    }

    protected function setFilters(array $filters) {
        return $this->getUser()->setAttribute('mes.filters', $filters, 'admin_module');
    }

    protected function getPager() {
        $pager = $this->configuration->getPager('Mes');
        $pager->setCriteria($this->buildCriteria());
        $pager->setPage($this->getPage());
        $pager->setPeerMethod($this->configuration->getPeerMethod());
        $pager->setPeerCountMethod($this->configuration->getPeerCountMethod());
        $pager->init();

        return $pager;
    }

    protected function setPage($page) {
        $this->getUser()->setAttribute('mes.page', $page, 'admin_module');
    }

    protected function getPage() {
        return $this->getUser()->getAttribute('mes.page', 1, 'admin_module');
    }

    protected function buildCriteria() {
        if (null === $this->filters) {
            $this->filters = $this->configuration->getFilterForm($this->getFilters());
        }

        $criteria = $this->filters->buildCriteria($this->getFilters());

        $this->addSortCriteria($criteria);

        $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $criteria);
        $criteria = $event->getReturnValue();

        return $criteria;
    }

    protected function addSortCriteria($criteria) {
        if (array(null, null) == ($sort = $this->getSort())) {
            return;
        }

        $column = MesPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
        if ('asc' == $sort[1]) {
            $criteria->addAscendingOrderByColumn($column);
        } else {
            $criteria->addDescendingOrderByColumn($column);
        }
    }

    protected function getSort() {
        if (null !== $sort = $this->getUser()->getAttribute('mes.sort', null, 'admin_module')) {
            return $sort;
        }

        $this->setSort($this->configuration->getDefaultSort());

        return $this->getUser()->getAttribute('mes.sort', null, 'admin_module');
    }

    protected function setSort(array $sort) {
        if (null !== $sort[0] && null === $sort[1]) {
            $sort[1] = 'asc';
        }

        $this->getUser()->setAttribute('mes.sort', $sort, 'admin_module');
    }

    protected function isValidSortColumn($column) {
        return in_array($column, BasePeer::getFieldnames('Mes', BasePeer::TYPE_FIELDNAME));
    }

}
