<?php

require_once dirname(__FILE__).'/../lib/listaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/listaGeneratorHelper.class.php';

/**
 * lista actions.
 *
 * @package    ipe
 * @subpackage lista
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class listaActions extends autoListaActions
{
	 public function executeCapturarCalificaciones(sfWebRequest $request) {
        $home = '@curso_curso_secretaria';
        if ($this->getUser()->hasCredential('profesor')) {
            $home = '@curso_lista_profesor';
        }

        if (!$request->hasParameter('id')) :
            $this->getUser()->setFlash('error', 'No existe el curso solicitado.');
            $this->redirect($home);
        endif;
        if (!($this->curso = CursoPeer::retrieveByPK($request->getParameter('id')))) :
            $this->getUser()->setFlash('error', 'No existe el curso solicitado.');
            $this->redirect($home);
        endif;

        if ($this->getUser()->hasCredential('profesor')) {
            $c = new Criteria;
            $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
            $profesor = ProfesorPeer::doSelectOne($c);

            if ($profesor->getId() != $this->curso->getIdProfesor()) {
                $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
            }
            if (!$this->curso->getEstado()) :
                $this->getUser()->setFlash('error', 'No es posible editar las calificaciones, si necesita alguna corrección acuda al aréa de atención.');
                $this->redirect($home);
            endif;
        }

        $this->criteria = new Criteria;
        $this->criteria->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
        $this->criteria->addAscendingOrderByColumn(AlumnoPeer::A_PATERNO);
        $this->criteria->addAscendingOrderByColumn(AlumnoPeer::A_MATERNO);
        $this->criteria->addAscendingOrderByColumn(AlumnoPeer::NOMBRE);

        $this->form = new CapturarCalificacionesForm($this->curso, array('criteria' => $this->criteria));
        $this->listas = $this->curso->getListas($this->criteria);
    }

    public function executeCerrarLista(sfWebRequest $request) {

        if ($this->getUser()->hasCredential('profesor')) {
            $home = '@curso_lista_profesor';
        }

        if (!$request->hasParameter('id')) :
            $this->getUser()->setFlash('error', 'No existe el curso solicitado.');
            $this->redirect($home);
        endif;
        if (!($curso = CursoPeer::retrieveByPK($request->getParameter('id')))) :
            $this->getUser()->setFlash('error', 'No existe el curso solicitado.');
            $this->redirect($home);
        endif;

        if ($this->getUser()->hasCredential('profesor')) {
            $c = new Criteria;
            $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
            $profesor = ProfesorPeer::doSelectOne($c);

            if ($profesor->getId() != $curso->getIdProfesor()) {
                $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
            }
        }
        $curso->setEstado(false);
        $curso->save();
        $this->getUser()->setFlash('error', 'El curso se ha cerrado.');
        $this->redirect($home);
    }

    public function executeCapturarCalificacionesDo(sfWebRequest $request) {
        
	$home = '@curso_lista_profesor';
        $curso = $this->getRoute()->getObject();

        if ($this->getUser()->hasCredential('profesor')) {
            $c = new Criteria;
            $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
            $profesor = ProfesorPeer::doSelectOne($c);

            if ($profesor->getId() != $curso->getIdProfesor()) {
                $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
            }
        }
	$criteria = new Criteria;
        $criteria->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
        $criteria->addAscendingOrderByColumn(AlumnoPeer::A_PATERNO);
        $criteria->addAscendingOrderByColumn(AlumnoPeer::A_MATERNO);
        $criteria->addAscendingOrderByColumn(AlumnoPeer::NOMBRE);
	$this->form = new CapturarCalificacionesForm($curso, array('criteria' => $criteria));

        $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));

        if ($this->form->isValid()) {
            $obj = $this->form->save();
            $curso->setEstado(true)->save();

            LogPeer::Log($this->getUser(), LogPeer::INFO, "Curso: " . $curso, $curso);
	    $this->getUser()->setFlash('notice', 'Se han modificado las calificaciones.');
	    $this->redirect($home); 
            
        } else {
            $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        }

        $this->listas = $curso->getListas($criteria);
        $this->curso = $curso;
        $this->setTemplate('CapturarCalificaciones');
    }

    public function preExecute() {
        $this->configuration = new listaGeneratorConfiguration();

        if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName()))) {
            $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
        }

        $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

        $this->helper = new listaGeneratorHelper();
    }

    public function executeIndex(sfWebRequest $request) {
        $home = '@curso_curso_secretaria';
        if ($this->getUser()->hasCredential('profesor')) {
            $home = '@curso_lista_profesor';
        }

        // sorting
        if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort'))) {
            $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page')) {
            $this->setPage($request->getParameter('page'));
        }

        //filtering
        if ($request->hasParameter('id')) :
            if (!($this->curso = CursoPeer::retrieveByPK($request->getParameter('id')))) :
                $this->getUser()->setFlash('error', 'No existe el curso solicitado.');
                $this->redirect($home);
            endif;
            $this->getUser()->setAttribute('lista.filters', array('id_curso' => array('text' => $request->getParameter('id'))), 'admin_module');
            $periodo = PeriodoPeer::retrieveByPK($this->curso->getIdPeriodo());
            $this->nombre_curso = sprintf("%s (%s, %s)", $this->curso, $this->curso->getAnno(), $periodo);
        else:
            if ($this->getUser()->hasCredential('profesor')):
                    $this->getUser()->setFlash('error', 'Especifique curso');
                    $this->redirect($home);
            endif;
        endif;

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        if ($this->getUser()->hasCredential('profesor')) {
            $c = new Criteria;
            $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
            $profesor = ProfesorPeer::doSelectOne($c);

            if ($profesor->getId() != $this->curso->getIdProfesor()) {
                $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
            }
        }
    }

    public function executeFilter(sfWebRequest $request) {
        $this->setPage(1);

        if ($request->hasParameter('_reset')) {
            $this->setFilters($this->configuration->getFilterDefaults());

            $this->redirect('@lista');
        }

        $this->filters = $this->configuration->getFilterForm($this->getFilters());

        $this->filters->bind($request->getParameter($this->filters->getName()));
        if ($this->filters->isValid()) {
            $this->setFilters($this->filters->getValues());

            $this->redirect('@lista');
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        $this->setTemplate('index');
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Lista = $this->form->getObject();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Lista = $this->form->getObject();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->Lista = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Lista);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->Lista = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Lista);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        $this->getRoute()->getObject()->delete();

        $this->getUser()->setFlash('notice', 'El elemento ha sido borrado.');

        $this->redirect('@lista');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El Elemento se ha actualizado correctamente.';

            $Lista = $form->save();

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Lista)));

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' Usted puede agregar otro abajo.');

                $this->redirect('@lista_new');
            } else {
                $this->getUser()->setFlash('notice', $notice);

                $this->redirect(array('sf_route' => 'lista_edit', 'sf_subject' => $Lista));
            }
        } else {
            $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        }
    }

    protected function getFilters() {
        return $this->getUser()->getAttribute('lista.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    }

    protected function setFilters(array $filters) {
        return $this->getUser()->setAttribute('lista.filters', $filters, 'admin_module');
    }

    protected function getPager() {
        $pager = $this->configuration->getPager('Lista');
        $pager->setCriteria($this->buildCriteria());
        $pager->setPage($this->getPage());
        $pager->setPeerMethod($this->configuration->getPeerMethod());
        $pager->setPeerCountMethod($this->configuration->getPeerCountMethod());
        $pager->init();

        return $pager;
    }

    protected function setPage($page) {
        $this->getUser()->setAttribute('lista.page', $page, 'admin_module');
    }

    protected function getPage() {
        return $this->getUser()->getAttribute('lista.page', 1, 'admin_module');
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

        $column = ListaPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
        if ('asc' == $sort[1]) {
            $criteria->addAscendingOrderByColumn($column);
        } else {
            $criteria->addDescendingOrderByColumn($column);
        }
    }

    protected function getSort() {
        if (null !== $sort = $this->getUser()->getAttribute('lista.sort', null, 'admin_module')) {
            return $sort;
        }

        $this->setSort($this->configuration->getDefaultSort());

        return $this->getUser()->getAttribute('lista.sort', null, 'admin_module');
    }

    protected function setSort(array $sort) {
        if (null !== $sort[0] && null === $sort[1]) {
            $sort[1] = 'asc';
        }

        $this->getUser()->setAttribute('lista.sort', $sort, 'admin_module');
    }

    protected function isValidSortColumn($column) {
        return in_array($column, BasePeer::getFieldnames('Lista', BasePeer::TYPE_FIELDNAME));
    }
}

