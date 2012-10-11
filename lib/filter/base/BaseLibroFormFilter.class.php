<?php

/**
 * Libro filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLibroFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_segundosumario' => new sfWidgetFormPropelChoice(array('model' => 'Segundosumario', 'add_empty' => true)),
      'titulo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreautor'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno_autor'    => new sfWidgetFormFilterInput(),
      'amaterno_autor'    => new sfWidgetFormFilterInput(),
      'ano_publicacion'   => new sfWidgetFormFilterInput(),
      'editorial'         => new sfWidgetFormFilterInput(),
      'isbn'              => new sfWidgetFormFilterInput(),
      'tema_primario'     => new sfWidgetFormFilterInput(),
      'tema_secuandario'  => new sfWidgetFormFilterInput(),
      'tema_terciario'    => new sfWidgetFormFilterInput(),
      'herejia'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cantidad'          => new sfWidgetFormFilterInput(),
      'numero_dewey'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_segundosumario' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Segundosumario', 'column' => 'id')),
      'titulo'            => new sfValidatorPass(array('required' => false)),
      'nombreautor'       => new sfValidatorPass(array('required' => false)),
      'apaterno_autor'    => new sfValidatorPass(array('required' => false)),
      'amaterno_autor'    => new sfValidatorPass(array('required' => false)),
      'ano_publicacion'   => new sfValidatorPass(array('required' => false)),
      'editorial'         => new sfValidatorPass(array('required' => false)),
      'isbn'              => new sfValidatorPass(array('required' => false)),
      'tema_primario'     => new sfValidatorPass(array('required' => false)),
      'tema_secuandario'  => new sfValidatorPass(array('required' => false)),
      'tema_terciario'    => new sfValidatorPass(array('required' => false)),
      'herejia'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cantidad'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_dewey'      => new sfValidatorPass(array('required' => false)),
      'observaciones'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_segundosumario' => 'ForeignKey',
      'titulo'            => 'Text',
      'nombreautor'       => 'Text',
      'apaterno_autor'    => 'Text',
      'amaterno_autor'    => 'Text',
      'ano_publicacion'   => 'Text',
      'editorial'         => 'Text',
      'isbn'              => 'Text',
      'tema_primario'     => 'Text',
      'tema_secuandario'  => 'Text',
      'tema_terciario'    => 'Text',
      'herejia'           => 'Boolean',
      'cantidad'          => 'Number',
      'numero_dewey'      => 'Text',
      'observaciones'     => 'Text',
    );
  }
}
