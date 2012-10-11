<?php

/**
 * Primersumario form base class.
 *
 * @method Primersumario getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePrimersumarioForm extends BaseFormPropel
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
      'numero'      => new sfValidatorString(array('max_length' => 3)),
      'nombre'      => new sfValidatorString(array('max_length' => 128)),
      'descripcion' => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Primersumario', 'column' => array('numero', 'nombre')))
    );

    $this->widgetSchema->setNameFormat('primersumario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Primersumario';
  }


}
