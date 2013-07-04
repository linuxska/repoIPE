<?php

require_once dirname(__FILE__).'/../lib/oracion_alumnoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/oracion_alumnoGeneratorHelper.class.php';

/**
 * oracion_alumno actions.
 *
 * @package    ipe
 * @subpackage oracion_alumno
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class oracion_alumnoActions extends autoOracion_alumnoActions
	{
	  public function executeIndex(sfWebRequest $request) {
           
    	    $c = new Criteria ;
	    $c->add(AlumnoPeer::NUMERO_CONTROL,$this->getUser()->getUsername(),Criteria::EQUAL);

	    $this->Alumno = AlumnoPeer::doSelectOne($c);
            $this->form = $this->configuration->getForm($this->Alumno);
            
            $this->setTemplate('edit');
    }
 
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

    public function executeUpdate(sfWebRequest $request)
    {
        $this->Alumno = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Alumno);

        $this->processForm($request, $this->form);
        
        $this->setTemplate('edit');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento se ha actualizado correctamente.';
     
      $alumno= AlumnoPeer::retrieveByPk($form->getObject()->getId());

      //LogPeer::Log(sfContext::getInstance()->getUser(), LogPeer::INFO, "Datos antiguos. ", $alumno);

      $Alumno = $form->save();
      
      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Alumno)));

      if ($request->hasParameter('_save_and_add'))
      $this->redirect('@homepage');
      else
      {
      $this->redirect('@homepage');
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
    }
  }
}
