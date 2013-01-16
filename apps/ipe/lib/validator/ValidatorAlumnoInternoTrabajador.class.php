<?php

class ValidatorAlumnoInternoTrabajador extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);

        foreach ($values as $key => $value) :
            if ($key != 'trabajador_ITC'):
                continue;
            endif;
            $errorSchemaLocal = new sfValidatorErrorSchema($this);

            if (strlen($value['nombre']) && !strlen($value['a_paterno']) && !strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_paterno');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_materno');
            endif;

            if (strlen($value['nombre']) && strlen($value['a_paterno']) && !strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_materno');
            endif;

            if (strlen($value['nombre']) && !strlen($value['a_paterno']) && strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_paterno');
            endif;

            if (!strlen($value['nombre']) && strlen($value['a_paterno']) && !strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'nombre');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_materno');
            endif;

            if (!strlen($value['nombre']) && strlen($value['a_paterno']) && strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'nombre');
            endif;

            if (!strlen($value['nombre']) && !strlen($value['a_paterno']) && strlen($value['a_materno'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'a_paterno');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'nombre');
            endif;

            if (!strlen($value['nombre']) && !strlen($value['a_paterno']) && !strlen($value['a_materno'])) :
                unset($values[$key]);
            endif;

            if (count($errorSchemaLocal)) :
                $errorSchema->addError($errorSchemaLocal, (string) $key);
            endif;
        endforeach;

        // throws the error for the main form
        if (count($errorSchema)) :
            throw new sfValidatorErrorSchema($this, $errorSchema);
        endif;

        return $values;
    }

}