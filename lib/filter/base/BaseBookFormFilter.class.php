<?php

/**
 * Book filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseBookFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_decimal'        => new sfWidgetFormPropelChoice(array('model' => 'Decimalen', 'add_empty' => true)),
      'title'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author_firstname'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author_lastname'   => new sfWidgetFormFilterInput(),
      'year'              => new sfWidgetFormFilterInput(),
      'publishing_house'  => new sfWidgetFormFilterInput(),
      'isbn'              => new sfWidgetFormFilterInput(),
      'volume'            => new sfWidgetFormFilterInput(),
      'primary_subject'   => new sfWidgetFormFilterInput(),
      'secondary_subject' => new sfWidgetFormFilterInput(),
      'tertiary_subject'  => new sfWidgetFormFilterInput(),
      'heresy'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'quantity'          => new sfWidgetFormFilterInput(),
      'dewey_number'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observations'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_decimal'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Decimalen', 'column' => 'id')),
      'title'             => new sfValidatorPass(array('required' => false)),
      'author_firstname'  => new sfValidatorPass(array('required' => false)),
      'author_lastname'   => new sfValidatorPass(array('required' => false)),
      'year'              => new sfValidatorPass(array('required' => false)),
      'publishing_house'  => new sfValidatorPass(array('required' => false)),
      'isbn'              => new sfValidatorPass(array('required' => false)),
      'volume'            => new sfValidatorPass(array('required' => false)),
      'primary_subject'   => new sfValidatorPass(array('required' => false)),
      'secondary_subject' => new sfValidatorPass(array('required' => false)),
      'tertiary_subject'  => new sfValidatorPass(array('required' => false)),
      'heresy'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'quantity'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dewey_number'      => new sfValidatorPass(array('required' => false)),
      'observations'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('book_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_decimal'        => 'ForeignKey',
      'title'             => 'Text',
      'author_firstname'  => 'Text',
      'author_lastname'   => 'Text',
      'year'              => 'Text',
      'publishing_house'  => 'Text',
      'isbn'              => 'Text',
      'volume'            => 'Text',
      'primary_subject'   => 'Text',
      'secondary_subject' => 'Text',
      'tertiary_subject'  => 'Text',
      'heresy'            => 'Boolean',
      'quantity'          => 'Number',
      'dewey_number'      => 'Text',
      'observations'      => 'Text',
    );
  }
}
