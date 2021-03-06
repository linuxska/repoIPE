<?php

require_once dirname(__FILE__).'/../lib/wokaty_booksGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/wokaty_booksGeneratorHelper.class.php';

/**
 * wokaty_books actions.
 *
 * @package    ipe
 * @subpackage wokaty_books
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class wokaty_booksActions extends autoWokaty_booksActions
{

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $WkBook = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $WkBook)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@wk_book_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect('@wk_book');
        //$this->redirect(array('sf_route' => 'wk_book_edit', 'sf_subject' => $WkBook));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  public function executeDetalles()
    {
    $this->Book = $this->getRoute()->getObject();
    //$this->form = $this->configuration->getForm($this->Libro);
    }

}
