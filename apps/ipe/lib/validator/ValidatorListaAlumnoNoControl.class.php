<?php

class ValidatorListaAlumnoNoControl extends sfValidatorString {

    protected function configure($options = array(), $messages = array()) {
        parent::configure($options, $messages);

        $this->addMessage('no_exists', '"%value%" no existe.');
        $this->addOption('no_exists');
    }

    protected function doClean($value) {
        $value = parent::doClean($value);

        $c = new Criteria;
        $c->add(AlumnoPeer::NUMERO_CONTROL, $value, Criteria::EQUAL);

        if (!AlumnoPeer::doCount($c)) :
            throw new sfValidatorError($this, 'no_exists', array('value' => $value));
        endif;

        $alumno = AlumnoPeer::doSelectOne($c);

        return $alumno->getId();
    }

}