<?php

/**
 * Secondsummary form base class.
 *
 * @method Secondsummary getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSecondsummaryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'id_firstsummary' => new sfWidgetFormPropelChoice(array('model' => 'Firstsummary', 'add_empty' => false)),
      'number'          => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_firstsummary' => new sfValidatorPropelChoice(array('model' => 'Firstsummary', 'column' => 'id')),
      'number'          => new sfValidatorString(array('max_length' => 6)),
      'name'            => new sfValidatorString(array('max_length' => 128)),
      'description'     => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Secondsummary', 'column' => array('id_firstsummary', 'number')))
    );

    $this->widgetSchema->setNameFormat('secondsummary[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Secondsummary';
  }


}
