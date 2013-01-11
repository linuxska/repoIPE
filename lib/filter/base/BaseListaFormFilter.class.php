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
      'id_alumno'            => new sfWidgetFormPropelChoice(array('model' => 'Alumno', 'add_empty' => true)),
      'id_curso'             => new sfWidgetFormPropelChoice(array('model' => 'Curso', 'add_empty' => true)),
      'primera_calificacion' => new sfWidgetFormFilterInput(),
      'segunda_calificacion' => new sfWidgetFormFilterInput(),
      'calificacion_final'   => new sfWidgetFormFilterInput(),
      'aprobado'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones'        => new sfWidgetFormFilterInput(),
      'inasistencia'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_alumno'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Alumno', 'column' => 'id')),
      'id_curso'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Curso', 'column' => 'id')),
      'primera_calificacion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segunda_calificacion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'calificacion_final'   => new sfValidatorPass(array('required' => false)),
      'aprobado'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones'        => new sfValidatorPass(array('required' => false)),
      'inasistencia'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'id'                   => 'Number',
      'id_alumno'            => 'ForeignKey',
      'id_curso'             => 'ForeignKey',
      'primera_calificacion' => 'Number',
      'segunda_calificacion' => 'Number',
      'calificacion_final'   => 'Text',
      'aprobado'             => 'Boolean',
      'observaciones'        => 'Text',
      'inasistencia'         => 'Number',
    );
  }
}
