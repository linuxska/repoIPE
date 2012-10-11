<?php

/**
 * Primersumario filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePrimersumarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'numero'      => new sfValidatorPass(array('required' => false)),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('primersumario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Primersumario';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'numero'      => 'Text',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
    );
  }
}
