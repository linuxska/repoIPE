<?php

require_once dirname(__FILE__).'/../lib/lista_profesorGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/lista_profesorGeneratorHelper.class.php';

/**
 * lista_profesor actions.
 *
 * @package    ipe
 * @subpackage lista_profesor
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class lista_profesorActions extends autoLista_profesorActions
{
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
		$anno = $this->getUser()->getAttribute('lista_profesor.filters', array(), 'admin_module');
		if (!isset($anno['anno']['text'])):
		    $this->getUser()->setAttribute('lista_profesor.filters', array('anno' => array('text' => date('Y', time()))), 'admin_module');
		endif;
	
		$this->pager = $this->getPager();
		$this->sort = $this->getSort();
        }
        
	public function executeNew(sfWebRequest $request) {
		throw new sfError404Exception();   
	}

	public function executeCreate(sfWebRequest $request) {
		throw new sfError404Exception();
	}
	
	public function executeEdit(sfWebRequest $request) {
		throw new sfError404Exception();
	}
	
	public function executeUpdate(sfWebRequest $request) {
		throw new sfError404Exception();
	}
	
	public function executeDelete(sfWebRequest $request) {
		throw new sfError404Exception();
	}
	
	protected function buildCriteria()
	{
		if (null === $this->filters) {
			$this->filters = $this->configuration->getFilterForm($this->getFilters());
		}
		
		$criteria = $this->filters->buildCriteria($this->getFilters());
		
		$this->addSortCriteria($criteria);
		
		$event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $criteria);
		$criteria = $event->getReturnValue();
		
		$c = new Criteria;
		$c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);
		$profesor = ProfesorPeer::doSelectOne($c);
		
		$criteria->add(CursoPeer::ID_PROFESOR, $profesor->getId(), Criteria::EQUAL);
		$criteria->add(CursoPeer::ESTADO, true);
		
		return $criteria;
	}

}
