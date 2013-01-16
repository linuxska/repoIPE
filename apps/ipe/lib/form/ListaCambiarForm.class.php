<?php

class ListaCambiarForm extends ListaForm {

    public function configure() {
        parent::configure();

        unset($this['primera_calificacion_examen'],$this['segunda_calificacion_examen'], $this['calificacion_parcial'],$this['calificacion_final'],$this['aprobado'],  $this['fecha_inscripcion']);

        $this->setWidget('id_curso', new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => true, 'criteria' => CursoPeer::getCurrentCoursesCriteria())));
        $this->setValidator('id_curso', new sfValidatorPropelChoice(array('model' => 'Curso', 'column' => 'id', 'criteria' => CursoPeer::getCurrentCoursesCriteria())));

        $this->setWidget('id_alumno', new sfWidgetFormInputText());
        $this->setValidator('id_alumno', new ValidatorListaAlumnoNoControl(
                        array(
                            'max_length' => 10,
                            'min_length' => 10,
                            'required' => true
                        ),
                        array(
                            'max_length' => '"%value%" es muy grande (%max_length% caracteres unicamente).',
                            'min_length' => '"%value%" es muy pequeño (%min_length% caracteres unicamente).',
                            'required' => 'Requerido'
                )));

        $this->validatorSchema['id_curso']->setMessage('required', 'Requerido');
        $this->validatorSchema['motivo_cambio']->setMessage('required', 'Requerido');

        $this->setWidget('id_curso_anterior', clone $this->widgetSchema['id_curso']);
        $this->setValidator('id_curso_anterior', clone $this->validatorSchema['id_curso']);

        $this->widgetSchema->moveField('id_curso_anterior', 'before', 'id_curso');

        $this->widgetSchema->setLabels(array(
            'id_alumno' => 'Número de control',
            'id_curso_anterior' => 'Curso Anterior',
            'id_curso' => 'Curso'
        ));

        $this->validatorSchema->setPostValidator(new ValidatorListaCambio());
        
        $this->widgetSchema->setPositions(array(
            'id', 'id_alumno', 'id_curso_anterior', 'id_curso', 'motivo_cambio', 
            'id_tipo_alumno', 'recibo_pago', 'id_documento_probatorio', 'identificacion', 
            'prorroga', 'folio_voucher', 'inasistencia', 'beca', 'observaciones'
            
        ));
    }

    public function updateObject($values = null) {
        if (null === $values) {
            $values = $this->values;
        }
        
        parent::updateObject($values);

        $id_alumno = $this->object->getIdAlumno();
        $alumno = AlumnoPeer::retrieveByPK($id_alumno);
        $alumno->setInscrito(true);
        $alumno->save();

        return $this->getObject();
    }

    public function doSave($con = null) {
        $this->object->setFechaInscripcion(date('Y-m-d', time()));

        //ListaPeer::doDelete(ListaPeer::getEntradaListaForAlumnoCriteria($this->values['id_alumno'], $this->values['curso_anterior']));
        $this->values['curso_anterior'] = (string) CursoPeer::retrieveByPK($this->values['curso_anterior']);
        
        parent::doSave($con);
    }

}