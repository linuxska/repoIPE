<?php

/**
 * preinscripcion actions.
 *
 * @package    ipe
 * @subpackage preinscripcion
 * @author     Abraham Rafael Rico Moreno
 */
class preinscripcionActions extends sfActions
{
 public function executePrintITC_DGTYV_CI_01(sfWebRequest $request) {
        $cedula = $this->getPartial('preinscripcion/itc_dgtyv_ci_01');

        $pdf = new ITC_DGTYV_CI_01($cedula);
        $pdf->doPDF();
    }

    public function executeDownloadForm(sfWebRequest $request) {
        $report_name = 'ITC_DGTYV_CI_01.pdf';
        $report_path = sfConfig::get('sf_upload_dir') . '/'. $report_name;

        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setHttpHeader('Pragma: public', true);
        $this->getResponse()->setContentType('application/pdf');

        $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename="' . $report_name . '"');

        $this->getResponse()->sendHttpHeaders();
        $this->getResponse()->setContent(readfile($report_path));

        throw new sfStopException();
    }

    public function executeIndex(sfWebRequest $request) {

        $this->getUser()->getAttributeHolder()->remove('id');
        echo("Hola Mundo");

    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new AlumnoPreinscripcionForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new AlumnoPreinscripcionForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeSuccess(sfWebRequest $request) {
        /*
         * Si la sesión no contiene el atributo «id» se redirecciona al inicio
         * del proceso.
         *
         * De lo contrario se obtiene el valor del atributo «id», se elimina de
         * la sesión y se obtiene el Alumno asociado a dicho 'id'. Finalmente,
         * se envia a la plantilla.
         *
         * Esto es porque la plantilla debe mostrar una clave de preincripción y
         * si no se ha completado la inscripcion antes no hay valor que mostrar.
         */
        if (!$this->getUser()->hasAttribute('id')):
            $this->redirect('@preinscripcion_index');
        endif;

        $id = $this->getUser()->getAttribute('id');        

        $this->alumno = AlumnoPeer::retrieveByPK($id);
    }

    public function executeNewSolicitarCurso(sfWebRequest $request) {
        $this->form = new AlumnoSolicitarCursoForm();
    }

    public function executeCreateSolicitarCurso(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new AlumnoSolicitarCursoForm();

        $this->processFormSolicitarCurso($request, $this->form);

        $this->setTemplate('newSolicitarCurso');
    }

    public function executeSuccessSolicitarCurso(sfWebRequest $request) {
        /*
         * Esto es únicamente por si se quiere mostrar información del alumno al
         * terminar de solicitar cursos.
         *
         * Actualmente no se usa.
         */
        if (!$this->getUser()->hasAttribute('id')):
            $this->redirect('@preinscripcion_index');
        endif;
        $id = $this->getUser()->getAttribute('id');

        $this->alumno = AlumnoPeer::retrieveByPK($id);
    }

    protected function processFormSolicitarCurso(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $alumno = $form->save();
            $this->logMessage("{PREINSCRIPCION} Alumno solicito curso: {$alumno->getId()}", 'info');
            $this->getUser()->setAttribute('id', $alumno->getId());
            $this->redirect('@preinscripcion_successSolicitarCurso');
        }
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $alumno = $form->save();
            $this->logMessage("{PREINSCRIPCION} Alumno inscrito: {$alumno->getId()}", 'info');
            $this->getUser()->setAttribute('id', $alumno->getId());
            $this->redirect('@preinscripcion_success');
        }
    }

}
