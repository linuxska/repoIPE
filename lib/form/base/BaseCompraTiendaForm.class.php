<?php

/**
 * CompraTienda form base class.
 *
 * @method CompraTienda getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCompraTiendaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'id_producto'  => new sfWidgetFormPropelChoice(array('model' => 'ProductoTienda', 'add_empty' => false)),
      'id_empleado'  => new sfWidgetFormPropelChoice(array('model' => 'EmpleadoTienda', 'add_empty' => false)),
      'fecha_compra' => new sfWidgetFormDate(),
      'cantidad'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_producto'  => new sfValidatorPropelChoice(array('model' => 'ProductoTienda', 'column' => 'id')),
      'id_empleado'  => new sfValidatorPropelChoice(array('model' => 'EmpleadoTienda', 'column' => 'id')),
      'fecha_compra' => new sfValidatorDate(),
      'cantidad'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('compra_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CompraTienda';
  }


}
