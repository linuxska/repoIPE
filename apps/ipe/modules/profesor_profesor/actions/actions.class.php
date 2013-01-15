<?php

require_once dirname(__FILE__).'/../lib/profesor_profesorGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/profesor_profesorGeneratorHelper.class.php';

/**
 * profesor_profesor actions.
 *
 * @package    ipe
 * @subpackage profesor_profesor
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class profesor_profesorActions extends autoProfesor_profesorActions
{
	public function executeNew(sfWebRequest $request) {
        throw new sfError404Exception('');
    }
    
    public function executeCreate(sfWebRequest $request) {
        throw new sfError404Exception('');
    }

    public function executeEdit(sfWebRequest $request) {  
        throw new sfError404Exception('');
    }

    public function executeIndex(sfWebRequest $request) {
        $c = new Criteria;
        $c->add(ProfesorPeer::RFC, $this->getUser()->getUsername(), Criteria::EQUAL);

        $this->Profesor = ProfesorPeer::doSelectOne($c);
        $this->form = $this->configuration->getForm($this->Profesor);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        throw new sfError404Exception('');
    }
 
    public function executeUpdate(sfWebRequest $request)
    {
        $this->Profesor = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->Profesor);

        $this->processForm($request, $this->form);
        
        $this->setTemplate('edit');
    }
   
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento se ha actualizado correctamente.';
	
	$profesor= ProfesorPeer::retrieveByPk($form->getObject()->getId());


        $Profesor = $form->save();

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Profesor)));

      if ($request->hasParameter('_save_and_add'))
     {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@profesor_profesor_profesor_new');
     }
      else
     {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'profesor_profesor_profesor', 'sf_subject' => $Profesor));
     }
    }
    else
    {
        $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
     }
    }
}
