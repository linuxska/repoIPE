<?php

/**
 * Log form base class.
 *
 * @method Log getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseLogForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'fecha'        => new sfWidgetFormDateTime(),
      'tipo_usuario' => new sfWidgetFormInputText(),
      'tipo_log'     => new sfWidgetFormInputText(),
      'usuario'      => new sfWidgetFormInputText(),
      'mensaje'      => new sfWidgetFormInputText(),
      'nombre_tabla' => new sfWidgetFormInputText(),
      'serialized'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'fecha'        => new sfValidatorDateTime(),
      'tipo_usuario' => new sfValidatorString(array('max_length' => 32)),
      'tipo_log'     => new sfValidatorString(array('max_length' => 32)),
      'usuario'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'mensaje'      => new sfValidatorString(array('max_length' => 1024, 'required' => false)),
      'nombre_tabla' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'serialized'   => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }


}
