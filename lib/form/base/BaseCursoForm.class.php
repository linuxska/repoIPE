<?php

/**
 * Curso form base class.
 *
 * @method Curso getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCursoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_materia'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => false)),
      'id_profesor' => new sfWidgetFormPropelChoice(array('model' => 'Profesor', 'add_empty' => false)),
      'id_periodo'  => new sfWidgetFormPropelChoice(array('model' => 'Periodo', 'add_empty' => false)),
      'id_salon'    => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => false)),
      'hora_inicio' => new sfWidgetFormTime(),
      'hora_final'  => new sfWidgetFormTime(),
      'anno'        => new sfWidgetFormInputText(),
      'estado'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_materia'  => new sfValidatorPropelChoice(array('model' => 'Materia', 'column' => 'id')),
      'id_profesor' => new sfValidatorPropelChoice(array('model' => 'Profesor', 'column' => 'id')),
      'id_periodo'  => new sfValidatorPropelChoice(array('model' => 'Periodo', 'column' => 'id')),
      'id_salon'    => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id')),
      'hora_inicio' => new sfValidatorTime(),
      'hora_final'  => new sfValidatorTime(),
      'anno'        => new sfValidatorString(array('max_length' => 4)),
      'estado'      => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Curso';
  }


}
