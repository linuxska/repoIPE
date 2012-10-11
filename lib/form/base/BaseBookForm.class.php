<?php

/**
 * Book form base class.
 *
 * @method Book getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBookForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_second_sum'     => new sfWidgetFormPropelChoice(array('model' => 'Secondsummary', 'add_empty' => false)),
      'title'             => new sfWidgetFormInputText(),
      'author_name'       => new sfWidgetFormInputText(),
      'author_lastname'   => new sfWidgetFormInputText(),
      'author_mothername' => new sfWidgetFormInputText(),
      'year_publication'  => new sfWidgetFormInputText(),
      'editorial'         => new sfWidgetFormInputText(),
      'isbn'              => new sfWidgetFormInputText(),
      'primary_theme'     => new sfWidgetFormInputText(),
      'secundary_theme'   => new sfWidgetFormInputText(),
      'tertiary_theme'    => new sfWidgetFormInputText(),
      'heresy'            => new sfWidgetFormInputCheckbox(),
      'amount'            => new sfWidgetFormInputText(),
      'dewey_number'      => new sfWidgetFormInputText(),
      'observations'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_second_sum'     => new sfValidatorPropelChoice(array('model' => 'Secondsummary', 'column' => 'id')),
      'title'             => new sfValidatorString(array('max_length' => 512)),
      'author_name'       => new sfValidatorString(array('max_length' => 128)),
      'author_lastname'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'author_mothername' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'year_publication'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'editorial'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'isbn'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'primary_theme'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'secundary_theme'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tertiary_theme'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'heresy'            => new sfValidatorBoolean(),
      'amount'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'dewey_number'      => new sfValidatorString(array('max_length' => 32)),
      'observations'      => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('book[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }


}
