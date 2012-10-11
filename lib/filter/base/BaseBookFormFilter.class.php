<?php

/**
 * Book filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBookFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_second_sum'     => new sfWidgetFormPropelChoice(array('model' => 'Secondsummary', 'add_empty' => true)),
      'title'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author_name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author_lastname'   => new sfWidgetFormFilterInput(),
      'author_mothername' => new sfWidgetFormFilterInput(),
      'year_publication'  => new sfWidgetFormFilterInput(),
      'editorial'         => new sfWidgetFormFilterInput(),
      'isbn'              => new sfWidgetFormFilterInput(),
      'primary_theme'     => new sfWidgetFormFilterInput(),
      'secundary_theme'   => new sfWidgetFormFilterInput(),
      'tertiary_theme'    => new sfWidgetFormFilterInput(),
      'heresy'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'amount'            => new sfWidgetFormFilterInput(),
      'dewey_number'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observations'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_second_sum'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Secondsummary', 'column' => 'id')),
      'title'             => new sfValidatorPass(array('required' => false)),
      'author_name'       => new sfValidatorPass(array('required' => false)),
      'author_lastname'   => new sfValidatorPass(array('required' => false)),
      'author_mothername' => new sfValidatorPass(array('required' => false)),
      'year_publication'  => new sfValidatorPass(array('required' => false)),
      'editorial'         => new sfValidatorPass(array('required' => false)),
      'isbn'              => new sfValidatorPass(array('required' => false)),
      'primary_theme'     => new sfValidatorPass(array('required' => false)),
      'secundary_theme'   => new sfValidatorPass(array('required' => false)),
      'tertiary_theme'    => new sfValidatorPass(array('required' => false)),
      'heresy'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'amount'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'id_second_sum'     => 'ForeignKey',
      'title'             => 'Text',
      'author_name'       => 'Text',
      'author_lastname'   => 'Text',
      'author_mothername' => 'Text',
      'year_publication'  => 'Text',
      'editorial'         => 'Text',
      'isbn'              => 'Text',
      'primary_theme'     => 'Text',
      'secundary_theme'   => 'Text',
      'tertiary_theme'    => 'Text',
      'heresy'            => 'Boolean',
      'amount'            => 'Number',
      'dewey_number'      => 'Text',
      'observations'      => 'Text',
    );
  }
}
