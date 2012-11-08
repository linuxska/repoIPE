<?php

/**
 * Periodo filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BasePeriodoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inicio_periodo' => new sfWidgetFormPropelChoice(array('model' => 'Mes', 'add_empty' => true)),
      'final_periodo'  => new sfWidgetFormPropelChoice(array('model' => 'Mes', 'add_empty' => true)),
      'nombre_corto'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'periodo'        => new sfValidatorPass(array('required' => false)),
      'inicio_periodo' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Mes', 'column' => 'id')),
      'final_periodo'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Mes', 'column' => 'id')),
      'nombre_corto'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('periodo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Periodo';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'periodo'        => 'Text',
      'inicio_periodo' => 'ForeignKey',
      'final_periodo'  => 'ForeignKey',
      'nombre_corto'   => 'Text',
    );
  }
}
