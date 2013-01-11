<?php

/**
 * EmpleadoTienda form base class.
 *
 * @method EmpleadoTienda getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseEmpleadoTiendaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'nombre'    => new sfWidgetFormInputText(),
      'a_paterno' => new sfWidgetFormInputText(),
      'a_materno' => new sfWidgetFormInputText(),
      'telefono'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'    => new sfValidatorString(array('max_length' => 64)),
      'a_paterno' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'a_materno' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'telefono'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empleado_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpleadoTienda';
  }


}
