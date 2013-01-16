<?php

/**
 * Lista filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseListaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_alumno'                   => new sfWidgetFormPropelChoice(array('model' => 'Alumno', 'add_empty' => true)),
      'id_curso'                    => new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => true)),
      'fecha_inscripcion'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'primera_calificacion_examen' => new sfWidgetFormFilterInput(),
      'calificacion_parcial'        => new sfWidgetFormFilterInput(),
      'segunda_calificacion_examen' => new sfWidgetFormFilterInput(),
      'calificacion_final'          => new sfWidgetFormFilterInput(),
      'aprobado'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones'               => new sfWidgetFormFilterInput(),
      'inasistencia'                => new sfWidgetFormFilterInput(),
      'externo'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'recursando'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'id_alumno'                   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Alumno', 'column' => 'id')),
      'id_curso'                    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Curso', 'column' => 'id')),
      'fecha_inscripcion'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'primera_calificacion_examen' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'calificacion_parcial'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segunda_calificacion_examen' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'calificacion_final'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aprobado'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones'               => new sfValidatorPass(array('required' => false)),
      'inasistencia'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'externo'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'recursando'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('lista_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lista';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'id_alumno'                   => 'ForeignKey',
      'id_curso'                    => 'ForeignKey',
      'fecha_inscripcion'           => 'Date',
      'primera_calificacion_examen' => 'Number',
      'calificacion_parcial'        => 'Number',
      'segunda_calificacion_examen' => 'Number',
      'calificacion_final'          => 'Number',
      'aprobado'                    => 'Boolean',
      'observaciones'               => 'Text',
      'inasistencia'                => 'Number',
      'externo'                     => 'Boolean',
      'recursando'                  => 'Boolean',
    );
  }
}
