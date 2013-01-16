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
      'id'                          => new sfWidgetFormInputHidden(),
      'id_alumno'                   => new sfWidgetFormPropelChoice(array('model' => 'Alumno', 'add_empty' => false)),
      'id_curso'                    => new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => false)),
      'fecha_inscripcion'           => new sfWidgetFormDate(),
      'primera_calificacion_examen' => new sfWidgetFormInputText(),
      'calificacion_parcial'        => new sfWidgetFormInputText(),
      'segunda_calificacion_examen' => new sfWidgetFormInputText(),
      'calificacion_final'          => new sfWidgetFormInputText(),
      'aprobado'                    => new sfWidgetFormInputCheckbox(),
      'observaciones'               => new sfWidgetFormTextarea(),
      'inasistencia'                => new sfWidgetFormInputText(),
      'externo'                     => new sfWidgetFormInputCheckbox(),
      'recursando'                  => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_alumno'                   => new sfValidatorPropelChoice(array('model' => 'Alumno', 'column' => 'id')),
      'id_curso'                    => new sfValidatorPropelChoice(array('model' => 'Curso', 'column' => 'id')),
      'fecha_inscripcion'           => new sfValidatorDate(),
      'primera_calificacion_examen' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'calificacion_parcial'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'segunda_calificacion_examen' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'calificacion_final'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'aprobado'                    => new sfValidatorBoolean(),
      'observaciones'               => new sfValidatorString(array('required' => false)),
      'inasistencia'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'externo'                     => new sfValidatorBoolean(array('required' => false)),
      'recursando'                  => new sfValidatorBoolean(array('required' => false)),
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
