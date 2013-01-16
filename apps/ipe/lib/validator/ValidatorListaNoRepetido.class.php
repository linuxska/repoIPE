<?php

class ValidatorListaNoRepetido extends sfValidatorSchema {

    protected function configure($options = array(), $messages = array()) {
        parent::configure($options, $messages);

        $this->addMessage('already_enrolled', '"%value%" Ya esta inscrito en este curso.');
        $this->addMessage('course_overlap', 'El alumno ya tiene una clase a esta hora.');

        $this->addOption('course_overlap');
        $this->addOption('already_enrolled');
    }

    protected function doClean($values) {
        $id_alumno = $values['id_alumno'];
        $id_curso = $values['id_curso'];

        $c = new Criteria;
        $c->addJoin(AlumnoPeer::ID, ListaPeer::ID_ALUMNO, Criteria::JOIN);
        $cton1 = $c->getNewCriterion(ListaPeer::ID_ALUMNO,  $id_alumno, Criteria::EQUAL);
        $cton2 = $c->getNewCriterion(AlumnoPeer::NO_CONTROL,  $id_alumno, Criteria::EQUAL);
        $cton1->addOr($cton2);
        $c->add($cton1);
        $c->add(ListaPeer::ID_CURSO, $id_curso, Criteria::EQUAL);

        if (ListaPeer::doCount($c)) :
            $alumno = AlumnoPeer::retrieveByPK($values['id_alumno']);
            throw new sfValidatorError($this, 'already_enrolled', array('value' => $alumno->getNoControl()));
        endif;

        $alumno = AlumnoPeer::retrieveByPK($values['id_alumno']);
        if(!isset($values['id_curso'])) :
            return $values;
        endif;
        $curso = CursoPeer::retrieveByPK($values['id_curso']);
        $periodo = PeriodoPeer::retrieveByPK($curso->getIdPeriodo());

        /*if (is_object($alumno)) :
            $cursos_alumno = CursoPeer::doSelect(ListaPeer::getListasForAlumnoCriteria($alumno, $periodo, true));
            foreach ($cursos_alumno as $curso_alumno) :
                if (($curso_alumno->getHoraInicio() <= $curso->getHoraInicio()) && ($curso->getHoraInicio() <= $curso_alumno->getHoraFinal())) :
                    throw new sfValidatorError($this, 'course_overlap', array());
                endif;
            endforeach;
        endif;*/

        return $values;
    }

}
