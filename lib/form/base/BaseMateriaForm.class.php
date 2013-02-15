<?php

/**
 * Materia form base class.
 *
 * @method Materia getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMateriaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'nombre'   => new sfWidgetFormInputText(),
      'semestre' => new sfWidgetFormInputText(),
      'clave'    => new sfWidgetFormInputText(),
      'creditos' => new sfWidgetFormInputText(),
      'activo'   => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'   => new sfValidatorString(array('max_length' => 64)),
      'semestre' => new sfValidatorString(array('max_length' => 2)),
      'clave'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'creditos' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'activo'   => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('materia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Materia';
  }


}
