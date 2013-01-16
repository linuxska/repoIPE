<?php

class ValidatorBeca extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);

        foreach ($values as $key => $value) :
            if ($key != "beca"):
                continue;
            endif;
            $errorSchemaLocal = new sfValidatorErrorSchema($this);

            if (isset($value['porcentaje']) && !isset($value['autorizo'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'autorizo');
            endif;

            if (isset($value['porcentaje']) && !isset($value['autorizo'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'porcentaje');
            endif;

            if (!isset($value['porcentaje']) && !isset($value['autorizo'])) :
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
