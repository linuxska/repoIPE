<?php

class ListaInscripcionForm extends ListaForm {

    public function configure() {
        parent::configure();

        unset($this['primera_calificacion_examen'], $this['aprobado'], $this['segunda_calificacion_examen'], $this['calificacion_final'],$this['calificacion_parcial'], $this['fecha_inscripcion']);

        $this->setWidget('id_curso', new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => false, 'criteria' => CursoPeer::getCurrentCoursesCriteria())));
        $this->setValidator('id_curso', new sfValidatorPropelChoice(array('model' => 'Curso', 'column' => 'id', 'criteria' => CursoPeer::getCurrentCoursesCriteria())));
	    $this->setWidget('inasistencia', new sfWidgetFormInputHidden());
        $this->setWidget('id_alumno', new sfWidgetFormInputText());
        $this->setValidator('id_alumno', new ValidatorListaAlumnoNoPreinscripcion(
                        array(
                            'required' => true
                        ),
                        array(
                            'invalid' => '"%value%" no es un número.',
                            'required' => 'Requerido'
                )));

        $this->validatorSchema['id_curso']->setMessage('required', 'Requerido');

        $this->widgetSchema->setLabels(array(
            'id_alumno' => 'Número de <br />Preinscripcion',
        ));



    }

    public function updateObject($values = null) {
        parent::updateObject($values);

        $id_alumno = $this->object->getIdAlumno();

        $conn = Propel::getConnection(ListaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);

        $conn->beginTransaction();

        try {
            $alumno = AlumnoPeer::retrieveByPK($id_alumno, $conn);
 
            if (is_null($alumno->getNumeroControl())) :
                    $no_control = AlumnoPeer::getNumeroControl($this->object->getIdCurso(), $conn);
                    $alumno->setNumeroControl($no_control);
            endif;
            $alumno->setInscrito(true);
            $alumno->save($conn);

            $conn->commit();
        } catch (Exception $e) {
            $conn->rollBack();

            throw $e;
        }
        return $this->getObject();
    }

    public function doSave($con = null) {
        $this->object->setFechaInscripcion(date('Y-m-d', time()));

        parent::doSave($con);
    }

}
