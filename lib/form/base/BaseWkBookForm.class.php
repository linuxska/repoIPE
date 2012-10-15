<?php

/**
 * WkBook form base class.
 *
 * @method WkBook getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseWkBookForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_decimal'        => new sfWidgetFormPropelChoice(array('model' => 'Decimalen', 'add_empty' => false)),
      'title'             => new sfWidgetFormInputText(),
      'author_firstname'  => new sfWidgetFormInputText(),
      'author_lastname'   => new sfWidgetFormInputText(),
      'year'              => new sfWidgetFormInputText(),
      'publishing_house'  => new sfWidgetFormInputText(),
      'isbn'              => new sfWidgetFormInputText(),
      'volume'            => new sfWidgetFormInputText(),
      'primary_subject'   => new sfWidgetFormInputText(),
      'secondary_subject' => new sfWidgetFormInputText(),
      'tertiary_subject'  => new sfWidgetFormInputText(),
      'heresy'            => new sfWidgetFormInputCheckbox(),
      'quantity'          => new sfWidgetFormInputText(),
      'dewey_number'      => new sfWidgetFormInputText(),
      'observations'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_decimal'        => new sfValidatorPropelChoice(array('model' => 'Decimalen', 'column' => 'id')),
      'title'             => new sfValidatorString(array('max_length' => 512)),
      'author_firstname'  => new sfValidatorString(array('max_length' => 128)),
      'author_lastname'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'year'              => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'publishing_house'  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'isbn'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'volume'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'primary_subject'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'secondary_subject' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tertiary_subject'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'heresy'            => new sfValidatorBoolean(),
      'quantity'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'dewey_number'      => new sfValidatorString(array('max_length' => 32)),
      'observations'      => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('wk_book[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'WkBook';
  }


}
