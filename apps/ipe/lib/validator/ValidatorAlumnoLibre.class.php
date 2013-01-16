<?php

class ValidatorAlumnoLibre extends sfValidatorSchema {

    protected function doClean($values) {


	$id_alumno = $values['id_alumno'];
	$curso = CursoPeer::retrieveByPK($values['id_curso']);
	$year = $curso->getAnno();
	$periodo = $curso->getIdPeriodo();
	$hora_inicio = $curso->getHoraInicio();
	
	$c = new Criteria;
	$c->addJoin(AlumnoPeer::ID, ListaPeer::ID_ALUMNO, Criteria::LEFT_JOIN);
	$c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID,  Criteria::LEFT_JOIN);
        $c->add(CursoPeer::ANNO, $year, Criteria::EQUAL);
	$c->add(CursoPeer::ID_PERIODO, $periodo, Criteria::EQUAL);
	$c->add(CursoPeer::HORA_INICIO, $hora_inicio, Criteria::EQUAL);
	$c->add(AlumnoPeer::ID,  $id_alumno, Criteria::EQUAL); 

	$errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

		if (CursoPeer::doCount($c)):
		    $errorSchemaLocal->addError(new sfValidatorError($this, 'El alumno no esta disponible en ese horario.'), 'Error');
		    $errorSchema->addError($errorSchemaLocal, "Error");
		    throw new sfValidatorErrorSchema($this, $errorSchema);
		endif;
        return $values;
    }
}
