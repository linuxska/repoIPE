<?php

class ValidatorProrroga extends sfValidatorSchema {

    protected function doClean($values) {


        if (!$values['prorroga']):
        
            unset($values['recibo_pago'], $values['folio_voucher']);
            
        elseif (!$values['recibo_pago'] && !is_null($values['folio_voucher'])):
        
            unset($values['prorroga']);
        
        elseif (isset($values['recibo_pago'], $values['folio_voucher'], $values['prorroga'])):
            
            $errorSchemaLocal->addError(new sfValidatorError($this, 'Solo puede llenar «Prorroga» o «Recibo pago» y «Folio voucher». Llene sólo uno.'), 'Error');
            $errorSchema->addError($errorSchemaLocal, "Error");
            
        elseif (!isset($values['recibo_pago'], $values['folio_voucher'], $values['prorroga'])):
            
        $errorSchemaLocal->addError(new sfValidatorError($this, 'Debe llenar alguno de los dos: «Prorroga» o «Recibo pago» y «Folio voucher». Llene sólo uno.'), 'Error');
            $errorSchema->addError($errorSchemaLocal, "Error");
            
        elseif (isset($value['recibo_pago']) && !isset($value['folio_voucher'])) :
        
	    $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'folio_voucher');
	    $errorSchema->addError($errorSchemaLocal, 'folio_voucher');
	    
	elseif (!isset($value['recibo_pago']) && isset($value['folio_voucher'])) :
	
	    $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'recibo_pago');
	    $errorSchema->addError($errorSchemaLocal, 'recibo_pago');
	    
	elseif (!isset($value['recibo_pago']) && !isset($value['folio_voucher'])) :
	
            $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'recibo_pago');
            $errorSchema->addError($errorSchemaLocal, 'recibo_pago');
            
            $errorSchemaLocal->addError(new sfValidatorError($this, 'Requerido.'), 'folio_voucher');
            $errorSchema->addError($errorSchemaLocal, 'folio_voucher');
            
        endif;
        
        if (count($errorSchema)) :
            throw new sfValidatorErrorSchema($this, $errorSchema);
        endif;

	return $values;
    }
}
