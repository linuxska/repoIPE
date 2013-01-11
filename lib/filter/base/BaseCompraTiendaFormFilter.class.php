<?php

/**
 * CompraTienda filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCompraTiendaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_producto'  => new sfWidgetFormPropelChoice(array('model' => 'ProductoTienda', 'add_empty' => true)),
      'id_empleado'  => new sfWidgetFormPropelChoice(array('model' => 'EmpleadoTienda', 'add_empty' => true)),
      'fecha_compra' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cantidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_producto'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'ProductoTienda', 'column' => 'id')),
      'id_empleado'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EmpleadoTienda', 'column' => 'id')),
      'fecha_compra' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'cantidad'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('compra_tienda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CompraTienda';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_producto'  => 'ForeignKey',
      'id_empleado'  => 'ForeignKey',
      'fecha_compra' => 'Date',
      'cantidad'     => 'Number',
    );
  }
}
