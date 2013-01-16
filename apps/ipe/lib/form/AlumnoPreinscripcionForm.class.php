<?php

class AlumnoPreinscripcionForm extends AlumnoForm {

    public function configure() {
        parent::configure();

        unset($this['no_control'], $this['inscrito']);

        $form = new CursoSolicitadoCollectionForm(null, array('alumno' => $this->getObject()));

        $this->embedForm('cursos_solicitados', $form);

        $this->widgetSchema->setHelp('cursos_solicitados',
            'Solicitar un curso no genera obligación de tomarlo.<br /> Si no deseas
                solicitar un curso deja esto en blanco.');
    }

    protected function doSave($con = null) {
        $this->object->clearCursoSolicitados();

        parent::doSave($con);
    }

    public function saveEmbeddedForms($con = null, $forms = null) {
        $cursos_solicitados = $this->getValue('cursos_solicitados');
        $forms = $this->embeddedForms;
        foreach ($this->embeddedForms['cursos_solicitados'] as $name => $form) :
            if (!isset($cursos_solicitados[$name])) :               
                unset($forms['cursos_solicitados'][$name]);
            endif;
        endforeach;

        $_forms = $forms['cursos_solicitados']->getEmbeddedForms();

        foreach ($_forms as $key => $form) :
                $cursos_solicitados = $this->getValue('cursos_solicitados');
                $form->updateObject($cursos_solicitados[$key]);
                $form->getObject()->setAlumno($this->object);
                $form->getObject()->save();
        endforeach;
        unset($forms['cursos_solicitados']);

        return parent::saveEmbeddedForms($con, $forms);
    }

}