<?php

class ValidatorAlumnoInterno extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

        if (isset($values['alumno_interno']) && strlen($values['alumno_interno']['no_control']) && isset($values['trabajador_ITC'])):
            $errorSchemaLocal->addError(new sfValidatorError($this, 'No puede llenar ambos datos: «Alumno Interno» y «Trabajador ITC». Llene sólo uno.'), 'Error');
            $errorSchema->addError($errorSchemaLocal, "Error");
            throw new sfValidatorErrorSchema($this, $errorSchema);
        endif;

        return $values;
    }

}
