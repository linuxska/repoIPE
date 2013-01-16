<?php

/**
 * preinscripcion_secretaria actions.
 *
 * @package    ipe
 * @subpackage preinscripcion_secretaria
 * @author     Abraham Rafael Rico Moreno
 */
class preinscripcion_secretariaActions extends sfActions
{
  
    
    public function executePrintTicket(sfWebRequest $request) {
        try {
            $this->lista = $this->getRoute()->getObject();
        } catch (sfError404Exception $e) {
            $this->getUser()->setFlash('error', "La inscripción solicitada no existe.");
            $this->redirect('@preinscripcion_secretaria_reinscribir_new');
        }
        
        $content = $this->getPartial('printTicket');

        $ticket = new ITC_DGTYV_CI_10($content);

        $ticket->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }
    
    public function executePrintChangedTicket(sfWebRequest $request) {
        try {
            $this->lista = $this->getRoute()->getObject();
        } catch (sfError404Exception $e) {
            $this->getUser()->setFlash('error', "La inscripción solicitada no existe.");
            $this->redirect('@@preinscripcion_secretaria_cambiar_curso_new');
        }
        
        $content = $this->getPartial('printChangedTicket');

        $ticket = new ITC_DGTYV_CI_11($content);

        $ticket->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }

    public function executeNewReinscribir(sfWebRequest $request) {
        $this->form = new ListaReinscripcionForm();
    }

    public function executeCreateReinscribir(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ListaReinscripcionForm();

        $this->processListaReinscripcionForm($request, $this->form);

        $this->setTemplate('newReinscribir');
    }

    private function processListaReinscripcionForm($request, $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $lista = $form->save();

            $this->getUser()->setAttribute('id_lista', $lista->getId());
            $this->redirect('@preinscripcion_secretaria_reinscribir_success');
        }
    }

    public function executeSuccessReinscribir(sfWebRequest $request) {
        if ($this->getUser()->hasAttribute('id_lista')) :
            $this->lista = ListaPeer::retrieveByPK($this->getUser()->getAttribute('id_lista'));
            $this->getUser()->getAttributeHolder()->remove('id_lista');
            $this->setTemplate('successInscribir');
        else:
            $this->redirect('@preinscripcion_secretaria_reinscribir_new');
        endif;
    }

    public function executeNewInscribir(sfWebRequest $request) {
        if ($this->getUser()->hasAttribute('id_alumno')) :

            $lista = new Lista();
            $lista->setIdAlumno($this->getUser()->getAttribute('id_alumno'));

            $this->form = new ListaInscripcionForm($lista);

            $this->getUser()->getAttributeHolder()->remove('id_alumno');
        else:
            $this->form = new ListaInscripcionForm();
        endif;
    }

    public function executeCreateInscribir(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ListaInscripcionForm();

        $this->processListaInscripcionForm($request, $this->form);

        $this->setTemplate('newInscribir');
    }

    private function processListaInscripcionForm($request, $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $lista = $form->save();

            $this->getUser()->setAttribute('id_lista', $lista->getId());
            $this->redirect('@preinscripcion_secretaria_inscribir_success');
        }
    }

    public function executeSuccessInscribir(sfWebRequest $request) {
        if ($this->getUser()->hasAttribute('id_lista')) :
            $this->lista = ListaPeer::retrieveByPK($this->getUser()->getAttribute('id_lista'));
            $this->getUser()->getAttributeHolder()->remove('id_lista');
        else:
            $this->redirect('@preinscripcion_secretaria_inscribir_new');
        endif;
    }

    public function executeNewRegistro(sfWebRequest $request) {
        $this->form = new AlumnoInscripcionForm();
    }

    public function executeCreateRegistro(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new AlumnoInscripcionForm();

        $this->processListaRegistroForm($request, $this->form);
        $this->getUser()->setFlash('error', 'El elemento no se ha guardado debido a algunos errores.', false);
        $this->setTemplate('newRegistro');
    }

    private function processListaRegistroForm($request, $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $alumno = $form->save();

            $this->getUser()->setAttribute('id_alumno', $alumno->getId());
            $this->redirect('@preinscripcion_secretaria_inscribir_new');
        }
    }

    public function executeNewCambiar(sfWebRequest $request) {
        $this->form = new ListaCambiarForm();
    }

    public function executeCreateCambiar(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        
        $lista = $request->getParameter('lista');
        $lista = ListaPeer::retrieveByPk($lista['id']);

        $this->form = new ListaCambiarForm($lista);

        $this->processListaCambiarForm($request, $this->form);

        $this->setTemplate('newCambiar');
    }

    private function processListaCambiarForm($request, $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $lista = $form->save();

            $this->getUser()->setAttribute('id_lista', $lista->getId());
            $this->redirect('@preinscripcion_secretaria_cambiar_curso_success');
        }
    }

    public function executeSuccessCambiar(sfWebRequest $request) {
         if ($this->getUser()->hasAttribute('id_lista')) :
            $this->lista = ListaPeer::retrieveByPK($this->getUser()->getAttribute('id_lista'));
            $this->getUser()->getAttributeHolder()->remove('id_lista');
        else:
            $this->redirect('@preinscripcion_secretaria_cambiar_curso_new');
        endif;
    }

    public function executeDownloadForm(sfWebRequest $request) {
        $report_name = 'ITC_DGTYV_CI_02.pdf';
        $report_path = sfConfig::get('sf_upload_dir') . '/' .$report_name;

        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setHttpHeader('Pragma: public', true);
        $this->getResponse()->setContentType('application/pdf');

        $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename="' . $report_name . '"');

        $this->getResponse()->sendHttpHeaders();
        $this->getResponse()->setContent(readfile($report_path));

        throw new sfStopException();
    }}
