<?php

class ValidadorUsernameOrEmail extends sfValidatorString {

    protected function configure($options = array(), $messages = array()) {
        parent::configure($options, $messages);

        $this->addMessage('no_exists', '"%value%" no existe.');
        $this->addOption('no_exists');
    }

    protected function doClean($value) {
        $value = parent::doClean($value);
        
        if (!AlumnoPeer::doCount(sfGuardUserPeer::existAlumnoCriteria($value))
        	&& !ProfesorPeer::doCount(sfGuardUserPeer::existProfesorCriteria($value))) :
            throw new sfValidatorError($this, 'no_exists', array('value' => $value));
        endif;

        return $value;
    }

}
