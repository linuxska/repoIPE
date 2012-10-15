<?php

/**
 * Decimalen filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseDecimalenFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_integer'  => new sfWidgetFormPropelChoice(array('model' => 'Integer', 'add_empty' => true)),
      'number'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_integer'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Integer', 'column' => 'id')),
      'number'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('decimalen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Decimalen';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'id_integer'  => 'ForeignKey',
      'number'      => 'Number',
      'name'        => 'Text',
      'description' => 'Text',
    );
  }
}
