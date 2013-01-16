<?php

/**
 * FolioControl form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class FolioControlForm extends BaseFolioControlForm
{
  public function configure()
  {

        $this->setValidator('consecutivo', new sfValidatorInteger(array('min' => 0, 'max' => 2147483647)));
        $this->setValidator('anno', new sfValidatorInteger(array('min' => 0, 'max' => 9999)));

        $this->validatorSchema['anno']->setMessage('required', 'Requerido.');
        $this->validatorSchema['anno']->setMessage('min', '"%value%" debe ser almenos %min%.');
        $this->validatorSchema['anno']->setMessage('max', '"%value%" debe ser menor que %max%.');
        $this->validatorSchema['anno']->setMessage('invalid', '"%value%" no es un entero.');

        $this->validatorSchema['consecutivo']->setMessage('required', 'Requerido.');
        $this->validatorSchema['consecutivo']->setMessage('invalid', '"%value%" no es un número.');

        $this->validatorSchema->getPostValidator()->setMessage('invalid', 'Ya existe un folio para este año.');
    }
  
}
