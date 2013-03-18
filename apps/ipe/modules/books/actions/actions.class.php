
  <?php

require_once dirname(__FILE__).'/../lib/booksGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/booksGeneratorHelper.class.php';

/**
 * books actions.
 *
 * @package    ipe
 * @subpackage books
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class booksActions extends autoBooksActions
{
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $Book = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Book)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@book_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);
        $this->redirect('@book');

        //$this->redirect(array('sf_route' => 'book_edit', 'sf_subject' => $Book));
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