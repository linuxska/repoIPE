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
      'id_materia'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
      'id_profesor' => new sfWidgetFormPropelChoice(array('model' => 'Profesor', 'add_empty' => true)),
      'id_periodo'  => new sfWidgetFormPropelChoice(array('model' => 'Periodo', 'add_empty' => true)),
      'id_salon'    => new sfWidgetFormPropelChoice(array('model' => 'Salon', 'add_empty' => true)),
      'hora_inicio' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora_final'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'anno'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'id_materia'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Materia', 'column' => 'id')),
      'id_profesor' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Profesor', 'column' => 'id')),
      'id_periodo'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Periodo', 'column' => 'id')),
      'id_salon'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Salon', 'column' => 'id')),
      'hora_inicio' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'hora_final'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'anno'        => new sfValidatorPass(array('required' => false)),
      'estado'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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
      'id'          => 'Number',
      'id_materia'  => 'ForeignKey',
      'id_profesor' => 'ForeignKey',
      'id_periodo'  => 'ForeignKey',
      'id_salon'    => 'ForeignKey',
      'hora_inicio' => 'Date',
      'hora_final'  => 'Date',
      'anno'        => 'Text',
      'estado'      => 'Boolean',
    );
  }
}
