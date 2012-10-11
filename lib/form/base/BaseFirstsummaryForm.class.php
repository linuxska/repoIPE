<?php

/**
 * Firstsummary form base class.
 *
 * @method Firstsummary getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFirstsummaryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'number'      => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'number'      => new sfValidatorString(array('max_length' => 3)),
      'name'        => new sfValidatorString(array('max_length' => 128)),
      'description' => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Firstsummary', 'column' => array('number', 'name')))
    );

    $this->widgetSchema->setNameFormat('firstsummary[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Firstsummary';
  }


}
