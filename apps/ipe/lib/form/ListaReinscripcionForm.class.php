<?php

class ListaReinscripcionForm extends ListaForm {

    public function configure() {
        parent::configure();

        unset($this['primera_calificacion_examen'],$this['segunda_calificacion_examen'],$this['calificacion_parcial'],$this['calificacion_final'],$this['aprobado'], $this['fecha_inscripcion']);

        $this->setWidget('id_curso', new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => false, 'criteria' => CursoPeer::getCurrentCoursesCriteria())));
        $this->setValidator('id_curso', new sfValidatorPropelChoice(array('model' => 'Curso', 'column' => 'id', 'criteria' => CursoPeer::getCurrentCoursesCriteria())));
	$this->setWidget('inasistencia', new sfWidgetFormInputHidden());
        $this->setWidget('id_alumno', new sfWidgetFormInputText());
        $this->setValidator('id_alumno', new ValidatorListaAlumnoNoControl(
                        array(
                            'max_length' => 8,
                            'min_length' => 8,
                            'required' => true
                        ),
                        array(
                            'max_length' => '"%value%" es muy grande (Diez %max_length% caracteres unicamente).',
                            'min_length' => '"%value%" es muy pequeño (Diez %min_length% caracteres unicamente).',
                            'required' => 'Requerido'
                )));

        $this->validatorSchema['id_curso']->setMessage('required', 'Requerido');

        $this->widgetSchema->setLabels(array(
            'id_alumno' => 'Número de control',
        ));

       /* $this->widgetSchema->setPositions(array(
            'id', 'id_alumno', 'id_curso',
            'id_tipo_alumno', 'recibo_pago', 'id_documento_probatorio', 'identificacion', 
            'prorroga', 'folio_voucher', 'inasistencia', 'beca', 'observaciones'

        ));
*/
        
 }

    public function updateObject($values = null) {
        parent::updateObject($values);

        $id_alumno = $this->object->getIdAlumno();

        $alumno = AlumnoPeer::retrieveByPK($id_alumno);
        $alumno->setInscrito(true);
        $alumno->save();

        return $this->getObject();
    }

     public function doSave($con = null) {
        $this->object->setFechaInscripcion(date('Y-m-d', time()));

        parent::doSave($con);
    }

}
