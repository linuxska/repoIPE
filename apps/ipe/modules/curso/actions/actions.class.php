<?php

require_once dirname(__FILE__).'/../lib/cursoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cursoGeneratorHelper.class.php';

/**
 * curso actions.
 *
 * @package    ipe
 * @subpackage curso
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class cursoActions extends autoCursoActions
{
	public function executeImprimirLista(sfWebRequest $request) {
    	try {
            $this->curso = $this->getRoute()->getObject();
        } catch (sfError404Exception $e) {
            $this->getUser()->setFlash('error', "El curso solicitado no existe.");
            $this->redirect('@curso');
        }

<<<<<<< HEAD
	/*if ($this->getUser()->hasCredential('profesor') && !($this->getUser()->hasCredential('coordinadora'))) {       
        	$c = new Criteria;
		$c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
		$profesor = ProfesorPeer::doSelectOne($c);
		
		if ($profesor->getId() != $this->curso->getIdProfesor()) {
			$this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
		}
        }
        Ã
	*/
=======

>>>>>>> 416e4d38de38edcf0be991f68c73c948e59e2c8a
        $content = $this->getPartial('lista');

        $lista = new IPE_03($content);

        $lista->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeImprimirListaCalificacion(sfWebRequest $request) {
        
        try {
            $this->curso = $this->getRoute()->getObject();
        } catch (sfError404Exception $e) {
            $this->getUser()->setFlash('error', "El curso solicitado no existe.");
            $this->redirect('@curso');
        }

    if ($this->getUser()->hasCredential('profesor') && !($this->getUser()->hasCredential('coordinadora'))) {       
            $c = new Criteria;
        $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
        $profesor = ProfesorPeer::doSelectOne($c);
        
        if ($profesor->getId() != $this->curso->getIdProfesor()) {
            $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
        }
        }
        
        $content = $this->getPartial('listacalificacion');

        $lista = new IPE_04($content);

        $lista->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }

    public function preExecute() {
        $this->configuration = new cursoGeneratorConfiguration();

        if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName()))) {
            $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
        }

        $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

        $this->helper = new cursoGeneratorHelper();
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

        //filtering
        $anno = $this->getUser()->getAttribute('curso.filters', array(), 'admin_module');
        if (!isset($anno['anno']['text'])):
            $this->getUser()->setAttribute('curso.filters', array('anno' => array('text' => date('Y', time()))), 'admin_module');
        endif;

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();
    }

    public function executeFilter(sfWebRequest $request) {
        $this->setPage(1);

        if ($request->hasParameter('_reset')) {
            $this->setFilters($this->configuration->getFilterDefaults());

            $this->redirect('@curso');
        }

        $this->filters = $this->configuration->getFilterForm($this->getFilters());

        $this->filters->bind($request->getParameter($this->filters->getName()));
        if ($this->filters->isValid()) {
            $this->setFilters($this->filters->getValues());

            $this->redirect('@curso');
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        $this->setTemplate('index');
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Curso = $this->form->getObject();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->Curso = $this->form->getObject();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->Curso = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Curso);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->Curso = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Curso);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        /*
         * Los datos de un curso no se pueden borrar si hay alumnos inscritos en ese curso.
         */
        if (CursoPeer::doCount(ListaPeer::getListaForCursoCriteria($this->getRoute()->getObject()))) {
            $this->getUser()->setFlash('error', 'El elemento no ha sido borrado debido a que tiene alumnos inscritos.');

            $this->redirect('@curso');
        }

        $this->getRoute()->getObject()->delete();

        $this->getUser()->setFlash('notice', 'El elemento ha sido borrado.');

        $this->redirect('@curso');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El Elemento se ha actualizado correctamente.';

            $Curso = $form->save();

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Curso)));

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' Usted puede agregar otro abajo.');

                $this->redirect('@curso_new');
            } else {
                $this->getUser()->setFlash('notice', $notice);

                $this->redirect(array('sf_route' => 'curso_edit', 'sf_subject' => $Curso));
            }
        } else {
            $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        }
    }

    protected function getFilters() {
        return $this->getUser()->getAttribute('curso.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    }

    protected function setFilters(array $filters) {
        return $this->getUser()->setAttribute('curso.filters', $filters, 'admin_module');
    }

    protected function getPager() {
        $pager = $this->configuration->getPager('Curso');
        $pager->setCriteria($this->buildCriteria());
        $pager->setPage($this->getPage());
        $pager->setPeerMethod($this->configuration->getPeerMethod());
        $pager->setPeerCountMethod($this->configuration->getPeerCountMethod());
        $pager->init();

        return $pager;
    }

    protected function setPage($page) {
        $this->getUser()->setAttribute('curso.page', $page, 'admin_module');
    }

    protected function getPage() {
        return $this->getUser()->getAttribute('curso.page', 1, 'admin_module');
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

        $column = CursoPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
        if ('asc' == $sort[1]) {
            $criteria->addAscendingOrderByColumn($column);
        } else {
            $criteria->addDescendingOrderByColumn($column);
        }
    }

    protected function getSort() {
        if (null !== $sort = $this->getUser()->getAttribute('curso.sort', null, 'admin_module')) {
            return $sort;
        }

        $this->setSort($this->configuration->getDefaultSort());

        return $this->getUser()->getAttribute('curso.sort', null, 'admin_module');
    }

    protected function setSort(array $sort) {
        if (null !== $sort[0] && null === $sort[1]) {
            $sort[1] = 'asc';
        }

        $this->getUser()->setAttribute('curso.sort', $sort, 'admin_module');
    }

    protected function isValidSortColumn($column) {
        return in_array($column, BasePeer::getFieldnames('Curso', BasePeer::TYPE_FIELDNAME));
    }


}
