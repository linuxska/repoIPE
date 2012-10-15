<?php

/**
 * Decimal form base class.
 *
 * @method Decimal getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseDecimalForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_entero'   => new sfWidgetFormPropelChoice(array('model' => 'Entero', 'add_empty' => false)),
      'numero'      => new sfWidgetFormInputText(),
      'nombre'      => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_entero'   => new sfValidatorPropelChoice(array('model' => 'Entero', 'column' => 'id')),
      'numero'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nombre'      => new sfValidatorString(array('max_length' => 128)),
      'descripcion' => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('decimal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Decimal';
  }


}
