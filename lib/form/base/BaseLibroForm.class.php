<?php

/**
 * Libro form base class.
 *
 * @method Libro getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLibroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_segundosumario' => new sfWidgetFormPropelChoice(array('model' => 'Segundosumario', 'add_empty' => false)),
      'titulo'            => new sfWidgetFormInputText(),
      'nombreautor'       => new sfWidgetFormInputText(),
      'apaterno_autor'    => new sfWidgetFormInputText(),
      'amaterno_autor'    => new sfWidgetFormInputText(),
      'ano_publicacion'   => new sfWidgetFormInputText(),
      'editorial'         => new sfWidgetFormInputText(),
      'isbn'              => new sfWidgetFormInputText(),
      'tema_primario'     => new sfWidgetFormInputText(),
      'tema_secuandario'  => new sfWidgetFormInputText(),
      'tema_terciario'    => new sfWidgetFormInputText(),
      'herejia'           => new sfWidgetFormInputCheckbox(),
      'cantidad'          => new sfWidgetFormInputText(),
      'numero_dewey'      => new sfWidgetFormInputText(),
      'observaciones'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_segundosumario' => new sfValidatorPropelChoice(array('model' => 'Segundosumario', 'column' => 'id')),
      'titulo'            => new sfValidatorString(array('max_length' => 512)),
      'nombreautor'       => new sfValidatorString(array('max_length' => 128)),
      'apaterno_autor'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'amaterno_autor'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'ano_publicacion'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'editorial'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'isbn'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'tema_primario'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tema_secuandario'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tema_terciario'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'herejia'           => new sfValidatorBoolean(),
      'cantidad'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'numero_dewey'      => new sfValidatorString(array('max_length' => 32)),
      'observaciones'     => new sfValidatorString(array('max_length' => 512, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }


}
