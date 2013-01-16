<?php

class ValidatorCursosAprobados extends sfValidatorSchema {

    protected function doClean($values) {


	$id_curso = $values['id_curso'];
	$id_alumno = $values['id_alumno'];
	$prerequisitos = CursoPeer::retrieveByPK($id_curso)->getNivel()->getPrerequisitosRelatedById();

	foreach($prerequisitos as $requisito){
	$prerequisitos=$requisito->getIdNivelRequisito();
	}
	$requisitos = $prerequisitos;
	$year = date('Y')-2;

	$c = new Criteria;

	$c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID,  Criteria::LEFT_JOIN);
	$c->addJoin(CursoPeer::ID_NIVEL, NivelPeer::ID,  Criteria::LEFT_JOIN);
	$c->add(ListaPeer::ID_ALUMNO, $id_alumno, Criteria::EQUAL);
	$c->add(AlumnoPeer::ID,  $id_alumno, Criteria::EQUAL);
	$c->add(CursoPeer::ID_NIVEL, $requisitos, Criteria::IN);
	$c->add(ListaPeer::APROBADO, true, Criteria::EQUAL);
	$c->add(CursoPeer::ANNO, $year, Criteria::GREATER_THAN);

        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

	if($values['id_documento_probatorio']==3):
	return $values;
	elseif (CursoPeer::doCount($c)==0):
		    $errorSchemaLocal->addError(new sfValidatorError($this, 'El alumno aun no ha aprobado el curso anterior.'), 'Error');
		    $errorSchema->addError($errorSchemaLocal, "Error");
		    throw new sfValidatorErrorSchema($this, $errorSchema);
		endif;
	return $values;

	//$id_alumno = $values['id_alumno'];
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
