<?php

class ValidatorDocumentosAlumnos extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);


            if (isset($value['recomendacion_pastor']) && !isset($value['carta_recomedacion_hermano'])) :
		$errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'carta_recomedacion_hermano');
	        $errorSchema->addError($errorSchemaLocal, "Error");
		throw new sfValidatorErrorSchema($this, $errorSchema);
            endif;
/*
      'recomendacion_pastor'
      'carta_recomedacion_hermano'
      'certificado_medico'
      'acta_nacimiento'
      'fotografias'
      'acta_matrimonio'
 */

        return $values;
    }
}