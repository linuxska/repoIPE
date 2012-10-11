<?php

/**
 * Segundosumario filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSegundosumarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_primersumario' => new sfWidgetFormPropelChoice(array('model' => 'Primersumario', 'add_empty' => true)),
      'numero'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_primersumario' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Primersumario', 'column' => 'id')),
      'numero'           => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'descripcion'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('segundosumario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Segundosumario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_primersumario' => 'ForeignKey',
      'numero'           => 'Text',
      'nombre'           => 'Text',
      'descripcion'      => 'Text',
    );
  }
}
