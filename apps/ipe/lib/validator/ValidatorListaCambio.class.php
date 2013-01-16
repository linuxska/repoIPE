<?php

class ValidatorListaCambio extends sfValidatorSchema {

    protected function doClean($values) {
        if(!ListaPeer::doCount(ListaPeer::getEntradaListaForAlumnoCriteria($values['id_alumno'], $values['id_curso_anterior']))):
            $errorSchema = new sfValidatorErrorSchema($this);
            $errorSchemaLocal = new sfValidatorErrorSchema($this);

            $errorSchemaLocal->addError(new sfValidatorError($this, 'No se encuentra registrado en ese curso.'), 'Error');
            $errorSchema->addError($errorSchemaLocal, "Error");
            throw new sfValidatorErrorSchema($this, $errorSchema);
        endif;

        $values['curso_anterior'] = $values['id_curso_anterior'];

        unset($values['id_curso_anterior']);

        return $values;
    }
}