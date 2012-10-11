<?php

/**
 * Segundosumario form base class.
 *
 * @method Segundosumario getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSegundosumarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_primersumario' => new sfWidgetFormPropelChoice(array('model' => 'Primersumario', 'add_empty' => false)),
      'numero'           => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'descripcion'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_primersumario' => new sfValidatorPropelChoice(array('model' => 'Primersumario', 'column' => 'id')),
      'numero'           => new sfValidatorString(array('max_length' => 6)),
      'nombre'           => new sfValidatorString(array('max_length' => 128)),
      'descripcion'      => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Segundosumario', 'column' => array('id_primersumario', 'numero')))
    );

    $this->widgetSchema->setNameFormat('segundosumario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Segundosumario';
  }


}
