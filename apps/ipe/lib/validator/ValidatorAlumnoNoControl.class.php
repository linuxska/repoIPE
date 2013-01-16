<?php

class ValidatorAlumnoNoControl extends sfValidatorSchema {

    protected function doClean($values) {
        $alumno_interno = $values['alumno_interno'];
        if (!$alumno_interno['no_control']) :
            unset($values['alumno_interno']);
        endif;

        return $values;
    }

}