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
      'id'                    => new sfWidgetFormInputHidden(),
      'id_materia'            => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => false)),
      'id_profesor'           => new sfWidgetFormPropelChoice(array('model' => 'Profesor', 'add_empty' => false)),
      'id_periodo'            => new sfWidgetFormPropelChoice(array('model' => 'Periodo', 'add_empty' => false)),
      'id_salon_lunes'        => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'lunes_hora_inicio'     => new sfWidgetFormTime(),
      'lunes_hora_final'      => new sfWidgetFormTime(),
      'id_salon_martes'       => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'martes_hora_inicio'    => new sfWidgetFormTime(),
      'martes_hora_final'     => new sfWidgetFormTime(),
      'id_salon_miercoles'    => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'miercoles_hora_inicio' => new sfWidgetFormTime(),
      'miercoles_hora_final'  => new sfWidgetFormTime(),
      'id_salon_jueves'       => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'jueves_hora_inicio'    => new sfWidgetFormTime(),
      'jueves_hora_final'     => new sfWidgetFormTime(),
      'id_salon_viernes'      => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'viernes_hora_inicio'   => new sfWidgetFormTime(),
      'viernes_hora_final'    => new sfWidgetFormTime(),
      'anno'                  => new sfWidgetFormInputText(),
      'estado'                => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_materia'            => new sfValidatorPropelChoice(array('model' => 'Materia', 'column' => 'id')),
      'id_profesor'           => new sfValidatorPropelChoice(array('model' => 'Profesor', 'column' => 'id')),
      'id_periodo'            => new sfValidatorPropelChoice(array('model' => 'Periodo', 'column' => 'id')),
      'id_salon_lunes'        => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id', 'required' => false)),
      'lunes_hora_inicio'     => new sfValidatorTime(array('required' => false)),
      'lunes_hora_final'      => new sfValidatorTime(array('required' => false)),
      'id_salon_martes'       => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id', 'required' => false)),
      'martes_hora_inicio'    => new sfValidatorTime(array('required' => false)),
      'martes_hora_final'     => new sfValidatorTime(array('required' => false)),
      'id_salon_miercoles'    => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id', 'required' => false)),
      'miercoles_hora_inicio' => new sfValidatorTime(array('required' => false)),
      'miercoles_hora_final'  => new sfValidatorTime(array('required' => false)),
      'id_salon_jueves'       => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id', 'required' => false)),
      'jueves_hora_inicio'    => new sfValidatorTime(array('required' => false)),
      'jueves_hora_final'     => new sfValidatorTime(array('required' => false)),
      'id_salon_viernes'      => new sfValidatorPropelChoice(array('model' => 'Salon', 'column' => 'id', 'required' => false)),
      'viernes_hora_inicio'   => new sfValidatorTime(array('required' => false)),
      'viernes_hora_final'    => new sfValidatorTime(array('required' => false)),
      'anno'                  => new sfValidatorString(array('max_length' => 4)),
      'estado'                => new sfValidatorBoolean(),
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
