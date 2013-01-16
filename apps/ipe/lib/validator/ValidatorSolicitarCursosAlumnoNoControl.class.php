<?php

class ValidatorSolicitarCursosAlumnoNoControl extends sfValidatorString {

    protected function configure($options = array(), $messages = array()) {
        parent::configure($options, $messages);

        $this->addMessage('no_valid', 'El número de control debe ser de 10 caracteres. Proporcionado: %value%');
        $this->addOption('no_valid');
        $this->addMessage('no_exists', '"%value%" no existe.');
        $this->addOption('no_exists');
        $this->addMessage('already_chosen', '"%value%" ya solicito cursos.');
        $this->addOption('already_chosen');
    }

    protected function doClean($value) {
        $value = parent::doClean($value);

        if(strlen($value) != 10) :
            throw new sfValidatorError($this, 'no_valid', array('value' => $value));
        endif;

        $c = new Criteria;        
        $c->add(AlumnoPeer::NO_CONTROL, $value, Criteria::EQUAL);

        if (!AlumnoPeer::doCount($c)) :
            throw new sfValidatorError($this, 'no_exists', array('value' => $value));
        endif;

        $alumno = AlumnoPeer::doSelectOne($c);

        $c = new Criteria;
        $c->add(CursoSolicitadoPeer::ID_ALUMNO, $alumno->getId(), Criteria::EQUAL);

        if (CursoSolicitadoPeer::doCount($c)) :
            throw new sfValidatorError($this, 'already_chosen', array('value' => $value));
        endif;

        return $value;
    }

}