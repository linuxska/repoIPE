<?php

class ValidatorReciboPago extends sfValidatorSchema {

    protected function doClean($values) {
        $errorSchema = new sfValidatorErrorSchema($this);
        $errorSchemaLocal = new sfValidatorErrorSchema($this);

            
            if (isset($value['recibo_pago']) && !isset($value['folio_voucher'])) :
		$errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'folio_voucher');
	        $errorSchema->addError($errorSchemaLocal, "Error");
		throw new sfValidatorErrorSchema($this, $errorSchema);
            endif;

            if (!isset($value['recibo_pago']) && isset($value['folio_voucher'])) :
		$errorSchemaLocal->addError(new sfValidatorError($this, 'Es necesario llevar la casilla de recibo de pago'), 'recibo_pago');
		$errorSchema->addError($errorSchemaLocal, "Error");
		throw new sfValidatorErrorSchema($this, $errorSchema);
            endif;

            if (!isset($value['recibo_pago']) && !isset($value['folio_voucher'])) :
                return $values;
            endif;

	    if (isset($value['prorroga']) && isset($value['folio_voucher'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Solo marcar prorroga'), 'prorroga');
		$errorSchema->addError($errorSchemaLocal, "Error");
		throw new sfValidatorErrorSchema($this, $errorSchema);
            endif;
		
	    if (isset($value['prorroga']) && isset($value['recibo_pago'])) :
                $errorSchemaLocal->addError(new sfValidatorError($this, 'Solo marcar prorroga'), 'prorroga');
		$errorSchema->addError($errorSchemaLocal, "Error");
		throw new sfValidatorErrorSchema($this, $errorSchema);
            endif;

        return $values;
    }
}
