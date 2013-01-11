<?php

/**
 * Lista form base class.
 *
 * @method Lista getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseListaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'id_alumno'            => new sfWidgetFormPropelChoice(array('model' => 'Alumno', 'add_empty' => false)),
      'id_curso'             => new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => false)),
      'primera_calificacion' => new sfWidgetFormInputText(),
      'segunda_calificacion' => new sfWidgetFormInputText(),
      'calificacion_final'   => new sfWidgetFormInputText(),
      'aprobado'             => new sfWidgetFormInputCheckbox(),
      'observaciones'        => new sfWidgetFormTextarea(),
      'inasistencia'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_alumno'            => new sfValidatorPropelChoice(array('model' => 'Alumno', 'column' => 'id')),
      'id_curso'             => new sfValidatorPropelChoice(array('model' => 'Curso', 'column' => 'id')),
      'primera_calificacion' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'segunda_calificacion' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'calificacion_final'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'aprobado'             => new sfValidatorBoolean(),
      'observaciones'        => new sfValidatorString(array('required' => false)),
      'inasistencia'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lista';
  }


}
