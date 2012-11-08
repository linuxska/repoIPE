<?php

/**
 * Entero form base class.
 *
 * @method Entero getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseEnteroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'numero'      => new sfWidgetFormInputText(),
      'nombre'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'numero'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nombre'      => new sfValidatorString(array('max_length' => 128)),
      'descripcion' => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Entero', 'column' => array('id', 'numero', 'nombre')))
    );

    $this->widgetSchema->setNameFormat('entero[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entero';
  }


}
