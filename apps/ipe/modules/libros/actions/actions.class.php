<?php

require_once dirname(__FILE__).'/../lib/librosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/librosGeneratorHelper.class.php';

/**
 * libros actions.
 *
 * @package    ipe
 * @subpackage libros
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class librosActions extends autoLibrosActions
{
	public function executeUpdate(sfWebRequest $request)
  {
    $this->Libro = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->Libro);

    $this->processForm($request, $this->form);

    //$this->setTemplate('new');
    $this->setTemplate('edit');

    }
     protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $Libro = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Libro)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@libro_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect('@libro');
        //$this->redirect(array('sf_route' => 'libro_edit', 'sf_subject' => $Libro));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}