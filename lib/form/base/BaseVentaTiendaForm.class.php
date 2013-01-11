<?php

/**
 * VentaTienda form base class.
 *
 * @method VentaTienda getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseVentaTiendaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_empleado'       => new sfWidgetFormPropelChoice(array('model' => 'EmpleadoTienda', 'add_empty' => true)),
      'id_producto'       => new sfWidgetFormPropelChoice(array('model' => 'ProductoTienda', 'add_empty' => false)),
      'fecha_venta'       => new sfWidgetFormDate(),
      'cantidad_producto' => new sfWidgetFormInputText(),
      'monto_venta'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_empleado'       => new sfValidatorPropelChoice(array('model' => 'EmpleadoTienda', 'column' => 'id', 'required' => false)),
      'id_producto'       => new sfValidatorPropelChoice(array('model' => 'ProductoTienda', 'column' => 'id')),
      'fecha_venta'       => new sfValidatorDate(),
      'cantidad_producto' => new sfValidatorString(array('max_length' => 4)),
      'monto_venta'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('venta_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VentaTienda';
  }


}
