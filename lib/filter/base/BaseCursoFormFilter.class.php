<?php

/**
 * Curso filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCursoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_materia'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_profesor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_salon'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_periodo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hora_inicio' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora_final'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'anno'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'id_materia'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_profesor' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_salon'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_periodo'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'id_materia'  => 'Number',
      'id_profesor' => 'Number',
      'id_salon'    => 'Number',
      'id_periodo'  => 'Number',
      'hora_inicio' => 'Date',
      'hora_final'  => 'Date',
      'anno'        => 'Text',
      'estado'      => 'Boolean',
    );
  }
}
