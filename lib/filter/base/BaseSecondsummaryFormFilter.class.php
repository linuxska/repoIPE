<?php

/**
 * Secondsummary filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSecondsummaryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_firstsummary' => new sfWidgetFormPropelChoice(array('model' => 'Firstsummary', 'add_empty' => true)),
      'number'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_firstsummary' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Firstsummary', 'column' => 'id')),
      'number'          => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('secondsummary_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Secondsummary';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'id_firstsummary' => 'ForeignKey',
      'number'          => 'Text',
      'name'            => 'Text',
      'description'     => 'Text',
    );
  }
}
