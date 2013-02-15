<?php

/**
 * Curso filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCursoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_materia'            => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
      'id_profesor'           => new sfWidgetFormPropelChoice(array('model' => 'Profesor', 'add_empty' => true)),
      'id_periodo'            => new sfWidgetFormPropelChoice(array('model' => 'Periodo', 'add_empty' => true)),
      'id_salon_lunes'        => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'lunes_hora_inicio'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'lunes_hora_final'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_salon_martes'       => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'martes_hora_inicio'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'martes_hora_final'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_salon_miercoles'    => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'miercoles_hora_inicio' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'miercoles_hora_final'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_salon_jueves'       => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'jueves_hora_inicio'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'jueves_hora_final'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_salon_viernes'      => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'viernes_hora_inicio'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'viernes_hora_final'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'anno'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'id_materia'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Materia', 'column' => 'id')),
      'id_profesor'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Profesor', 'column' => 'id')),
      'id_periodo'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Periodo', 'column' => 'id')),
      'id_salon_lunes'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'lunes_hora_inicio'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'lunes_hora_final'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_salon_martes'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'martes_hora_inicio'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'martes_hora_final'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_salon_miercoles'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'miercoles_hora_inicio' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'miercoles_hora_final'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_salon_jueves'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'jueves_hora_inicio'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'jueves_hora_final'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_salon_viernes'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'viernes_hora_inicio'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'viernes_hora_final'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'anno'                  => new sfValidatorPass(array('required' => false)),
      'estado'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Curso';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'id_materia'            => 'ForeignKey',
      'id_profesor'           => 'ForeignKey',
      'id_periodo'            => 'ForeignKey',
      'id_salon_lunes'        => 'ForeignKey',
      'lunes_hora_inicio'     => 'Date',
      'lunes_hora_final'      => 'Date',
      'id_salon_martes'       => 'ForeignKey',
      'martes_hora_inicio'    => 'Date',
      'martes_hora_final'     => 'Date',
      'id_salon_miercoles'    => 'ForeignKey',
      'miercoles_hora_inicio' => 'Date',
      'miercoles_hora_final'  => 'Date',
      'id_salon_jueves'       => 'ForeignKey',
      'jueves_hora_inicio'    => 'Date',
      'jueves_hora_final'     => 'Date',
      'id_salon_viernes'      => 'ForeignKey',
      'viernes_hora_inicio'   => 'Date',
      'viernes_hora_final'    => 'Date',
      'anno'                  => 'Text',
      'estado'                => 'Boolean',
    );
  }
}
