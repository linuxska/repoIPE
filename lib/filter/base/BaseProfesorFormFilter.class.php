<?php

/**
 * Profesor filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseProfesorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'rfc'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'a_paterno'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'a_materno'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colonia'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cp'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'      => new sfWidgetFormFilterInput(),
      'celular'       => new sfWidgetFormFilterInput(),
      'email'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'foto'          => new sfWidgetFormFilterInput(),
      'activo'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'rfc'           => new sfValidatorPass(array('required' => false)),
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'a_paterno'     => new sfValidatorPass(array('required' => false)),
      'a_materno'     => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'colonia'       => new sfValidatorPass(array('required' => false)),
      'ciudad'        => new sfValidatorPass(array('required' => false)),
      'estado'        => new sfValidatorPass(array('required' => false)),
      'cp'            => new sfValidatorPass(array('required' => false)),
      'sexo'          => new sfValidatorPass(array('required' => false)),
      'telefono'      => new sfValidatorPass(array('required' => false)),
      'celular'       => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'foto'          => new sfValidatorPass(array('required' => false)),
      'activo'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profesor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profesor';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'rfc'           => 'Text',
      'nombre'        => 'Text',
      'a_paterno'     => 'Text',
      'a_materno'     => 'Text',
      'direccion'     => 'Text',
      'colonia'       => 'Text',
      'ciudad'        => 'Text',
      'estado'        => 'Text',
      'cp'            => 'Text',
      'sexo'          => 'Text',
      'telefono'      => 'Text',
      'celular'       => 'Text',
      'email'         => 'Text',
      'foto'          => 'Text',
      'activo'        => 'Boolean',
      'observaciones' => 'Text',
    );
  }
}
