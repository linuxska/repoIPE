<?php

/**
 * EmpleadoTienda filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseEmpleadoTiendaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'a_paterno' => new sfWidgetFormFilterInput(),
      'a_materno' => new sfWidgetFormFilterInput(),
      'telefono'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'    => new sfValidatorPass(array('required' => false)),
      'a_paterno' => new sfValidatorPass(array('required' => false)),
      'a_materno' => new sfValidatorPass(array('required' => false)),
      'telefono'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empleado_tienda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpleadoTienda';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'nombre'    => 'Text',
      'a_paterno' => 'Text',
      'a_materno' => 'Text',
      'telefono'  => 'Text',
    );
  }
}
