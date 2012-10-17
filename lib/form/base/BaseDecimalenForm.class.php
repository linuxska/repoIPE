<?php

/**
 * Decimalen form base class.
 *
 * @method Decimalen getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseDecimalenForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_integer'  => new sfWidgetFormPropelChoice(array('model' => 'Integer', 'add_empty' => false)),
      'number'      => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_integer'  => new sfValidatorPropelChoice(array('model' => 'Integer', 'column' => 'id')),
      'number'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'name'        => new sfValidatorString(array('max_length' => 128)),
      'description' => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Decimalen', 'column' => array('number', 'name')))
    );

    $this->widgetSchema->setNameFormat('decimalen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Decimalen';
  }


}
