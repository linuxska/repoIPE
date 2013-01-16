<?php

class ValidatorSalonOcupado extends sfValidatorSchema {

    protected function doClean($values) { 

	$year= $values['anno'];
	$periodo= $values['id_periodo'];
	$hora_inicio= $values['hora_inicio'];
	$id_salon= $values['id_salon'];

	$c = new Criteria;
        $c->add(CursoPeer::ANNO, $year, Criteria::EQUAL);
	$c->add(CursoPeer::ID_PERIODO, $periodo, Criteria::EQUAL);
	$c->add(CursoPeer::HORA_INICIO, $hora_inicio, Criteria::EQUAL);
	$c->add(CursoPeer::ID_SALON, $id_salon, Criteria::EQUAL);
	
        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

		if (CursoPeer::doCount($c)):
		    $errorSchemaLocal->addError(new sfValidatorError($this, 'El salon esta ocupado, por favor seleccione otro '), 'Error');
		    $errorSchema->addError($errorSchemaLocal, "Error");
		    throw new sfValidatorErrorSchema($this, $errorSchema);
		endif;
        return $values;
    }
}
