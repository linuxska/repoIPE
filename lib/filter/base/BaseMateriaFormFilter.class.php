<?php

/**
 * Materia filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMateriaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'semestre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave'    => new sfWidgetFormFilterInput(),
      'activo'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'semestre' => new sfValidatorPass(array('required' => false)),
      'clave'    => new sfValidatorPass(array('required' => false)),
      'activo'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('materia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Materia';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'nombre'   => 'Text',
      'semestre' => 'Text',
      'clave'    => 'Text',
      'activo'   => 'Boolean',
    );
  }
}
