<?php

class ValidatorProfesorLibre extends sfValidatorSchema {

    protected function doClean($values) {

	$year= $values['anno'];
	$periodo= $values['id_periodo'];
	$hora_inicio= $values['hora_inicio'];
	$id_profesor= $values['id_profesor'];

	$c = new Criteria;
        $c->add(CursoPeer::ANNO, $year, Criteria::EQUAL);
	$c->add(CursoPeer::ID_PERIODO, $periodo, Criteria::EQUAL);
	$c->add(CursoPeer::ID_PROFESOR, $id_profesor, Criteria::EQUAL);
	$c->add(CursoPeer::HORA_INICIO, $hora_inicio, Criteria::EQUAL);

        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

		if (CursoPeer::doCount($c)):
		    $errorSchemaLocal->addError(new sfValidatorError($this, 'El profesor no esta disponible para este horario.'), 'Error');
		    $errorSchema->addError($errorSchemaLocal, "Error");
		    throw new sfValidatorErrorSchema($this, $errorSchema);
		endif;
        return $values;
    }
}
