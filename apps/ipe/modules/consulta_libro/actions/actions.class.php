<?php

require_once dirname(__FILE__).'/../lib/consulta_libroGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/consulta_libroGeneratorHelper.class.php';

/**
 * consulta_libro actions.
 *
 * @package    ipe
 * @subpackage consulta_libro
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class consulta_libroActions extends autoConsulta_libroActions
{

	public function executeNew(sfWebRequest $request) {
            throw new sfError404Exception('');
    }

    public function executeEdit(sfWebRequest $request) {
     	    throw new sfError404Exception('');
    }

    public function executeCreate(sfWebRequest $request) {
            throw new sfError404Exception('');
    }

    public function executeDelete(sfWebRequest $request) {
            throw new sfError404Exception('');
    }
	public function executeDetalles()
  	{
  	$this->Libro = $this->getRoute()->getObject();
    //$this->form = $this->configuration->getForm($this->Libro);
  	}
}
