<?php

/**
 * Profesor form base class.
 *
 * @method Profesor getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseProfesorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'rfc'           => new sfWidgetFormInputText(),
      'nombre'        => new sfWidgetFormInputText(),
      'a_paterno'     => new sfWidgetFormInputText(),
      'a_materno'     => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'estado'        => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'sexo'          => new sfWidgetFormInputText(),
      'telefono'      => new sfWidgetFormInputText(),
      'celular'       => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'foto'          => new sfWidgetFormInputText(),
      'activo'        => new sfWidgetFormInputCheckbox(),
      'observaciones' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'rfc'           => new sfValidatorString(array('max_length' => 15)),
      'nombre'        => new sfValidatorString(array('max_length' => 64)),
      'a_paterno'     => new sfValidatorString(array('max_length' => 64)),
      'a_materno'     => new sfValidatorString(array('max_length' => 64)),
      'direccion'     => new sfValidatorString(array('max_length' => 64)),
      'colonia'       => new sfValidatorString(array('max_length' => 64)),
      'ciudad'        => new sfValidatorString(array('max_length' => 64)),
      'estado'        => new sfValidatorString(array('max_length' => 64)),
      'cp'            => new sfValidatorString(array('max_length' => 5)),
      'sexo'          => new sfValidatorString(array('max_length' => 9)),
      'telefono'      => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'celular'       => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 128)),
      'foto'          => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'activo'        => new sfValidatorBoolean(),
      'observaciones' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profesor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profesor';
  }


}
