<?php

/**
 * Libro filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseLibroFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_decimal'       => new sfWidgetFormPropelChoice(array('model' => 'Decimal', 'add_empty' => true)),
      'titulo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreautor'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno_autor'   => new sfWidgetFormFilterInput(),
      'amaterno_autor'   => new sfWidgetFormFilterInput(),
      'ano_publicacion'  => new sfWidgetFormFilterInput(),
      'editorial'        => new sfWidgetFormFilterInput(),
      'tomo'             => new sfWidgetFormFilterInput(),
      'isbn'             => new sfWidgetFormFilterInput(),
      'tema_primario'    => new sfWidgetFormFilterInput(),
      'tema_secuandario' => new sfWidgetFormFilterInput(),
      'tema_terciario'   => new sfWidgetFormFilterInput(),
      'herejia'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cantidad'         => new sfWidgetFormFilterInput(),
      'foto'             => new sfWidgetFormFilterInput(),
      'fot'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'numero_dewey'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observaciones'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_decimal'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Decimal', 'column' => 'id')),
      'titulo'           => new sfValidatorPass(array('required' => false)),
      'nombreautor'      => new sfValidatorPass(array('required' => false)),
      'apaterno_autor'   => new sfValidatorPass(array('required' => false)),
      'amaterno_autor'   => new sfValidatorPass(array('required' => false)),
      'ano_publicacion'  => new sfValidatorPass(array('required' => false)),
      'editorial'        => new sfValidatorPass(array('required' => false)),
      'tomo'             => new sfValidatorPass(array('required' => false)),
      'isbn'             => new sfValidatorPass(array('required' => false)),
      'tema_primario'    => new sfValidatorPass(array('required' => false)),
      'tema_secuandario' => new sfValidatorPass(array('required' => false)),
      'tema_terciario'   => new sfValidatorPass(array('required' => false)),
      'herejia'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cantidad'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foto'             => new sfValidatorPass(array('required' => false)),
      'fot'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'numero_dewey'     => new sfValidatorPass(array('required' => false)),
      'observaciones'    => new sfValidatorPass(array('required' => false)),
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
      'id'               => 'Number',
      'id_decimal'       => 'ForeignKey',
      'titulo'           => 'Text',
      'nombreautor'      => 'Text',
      'apaterno_autor'   => 'Text',
      'amaterno_autor'   => 'Text',
      'ano_publicacion'  => 'Text',
      'editorial'        => 'Text',
      'tomo'             => 'Text',
      'isbn'             => 'Text',
      'tema_primario'    => 'Text',
      'tema_secuandario' => 'Text',
      'tema_terciario'   => 'Text',
      'herejia'          => 'Boolean',
      'cantidad'         => 'Number',
      'foto'             => 'Text',
      'fot'              => 'Boolean',
      'numero_dewey'     => 'Text',
      'observaciones'    => 'Text',
    );
  }
}
