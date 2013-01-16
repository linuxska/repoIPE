<?php

class ValidatorCursosSolicitados extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);

        foreach ($values as $key => $value) :
            $errorSchemaLocal = new sfValidatorErrorSchema($this);

            if (isset($value['id_periodo']) && !isset($value['id_nivel']) && !isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_nivel');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'hora');
            endif;

            if (isset($value['id_periodo']) && isset($value['id_nivel']) && !isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'hora');
            endif;

            if (isset($value['id_periodo']) && !isset($value['id_nivel']) && isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_nivel');
            endif;

            if (!isset($value['id_periodo']) && isset($value['id_nivel']) && !isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_periodo');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'hora');
            endif;

            if (!isset($value['id_periodo']) && isset($value['id_nivel']) && isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_periodo');
            endif;

            if (!isset($value['id_periodo']) && !isset($value['id_nivel']) && isset($value['hora'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_nivel');
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'id_periodo');
            endif;

            if (!isset($value['id_periodo']) && !isset($value['id_nivel']) && !isset($value['hora'])) :
                unset($values[$key]);
            endif;

            // some error for this embedded-form
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