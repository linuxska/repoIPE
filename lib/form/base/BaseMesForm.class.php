<?php

/**
 * Mes form base class.
 *
 * @method Mes getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'nombre' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre' => new sfValidatorString(array('max_length' => 32)),
    ));

    $this->widgetSchema->setNameFormat('mes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mes';
  }


}
