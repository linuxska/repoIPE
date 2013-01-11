<?php

/**
 * VentaTienda filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseVentaTiendaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empleado'       => new sfWidgetFormPropelChoice(array('model' => 'EmpleadoTienda', 'add_empty' => true)),
      'id_producto'       => new sfWidgetFormPropelChoice(array('model' => 'ProductoTienda', 'add_empty' => true)),
      'fecha_venta'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cantidad_producto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_venta'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_empleado'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EmpleadoTienda', 'column' => 'id')),
      'id_producto'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'ProductoTienda', 'column' => 'id')),
      'fecha_venta'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'cantidad_producto' => new sfValidatorPass(array('required' => false)),
      'monto_venta'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('venta_tienda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentaTienda';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_empleado'       => 'ForeignKey',
      'id_producto'       => 'ForeignKey',
      'fecha_venta'       => 'Date',
      'cantidad_producto' => 'Text',
      'monto_venta'       => 'Text',
    );
  }
}
