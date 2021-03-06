<?php

/**
 * Libro form base class.
 *
 * @method Libro getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseLibroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'id_decimal'      => new sfWidgetFormPropelChoice(array('model' => 'Decimal', 'add_empty' => false)),
      'titulo'          => new sfWidgetFormInputText(),
      'nombreautor'     => new sfWidgetFormInputText(),
      'apaterno_autor'  => new sfWidgetFormInputText(),
      'amaterno_autor'  => new sfWidgetFormInputText(),
      'ano_publicacion' => new sfWidgetFormInputText(),
      'editorial'       => new sfWidgetFormInputText(),
      'tomo'            => new sfWidgetFormInputText(),
      'isbn'            => new sfWidgetFormInputText(),
      'tema_primario'   => new sfWidgetFormInputText(),
      'tema_secundario' => new sfWidgetFormInputText(),
      'tema_terciario'  => new sfWidgetFormInputText(),
      'herejia'         => new sfWidgetFormInputCheckbox(),
      'cantidad'        => new sfWidgetFormInputText(),
      'foto'            => new sfWidgetFormInputText(),
      'fot'             => new sfWidgetFormInputCheckbox(),
      'numero_dewey'    => new sfWidgetFormInputText(),
      'actualizado'     => new sfWidgetFormInputCheckbox(),
      'observaciones'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_decimal'      => new sfValidatorPropelChoice(array('model' => 'Decimal', 'column' => 'id')),
      'titulo'          => new sfValidatorString(array('max_length' => 512)),
      'nombreautor'     => new sfValidatorString(array('max_length' => 128)),
      'apaterno_autor'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'amaterno_autor'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'ano_publicacion' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'editorial'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'tomo'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'isbn'            => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'tema_primario'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tema_secundario' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tema_terciario'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'herejia'         => new sfValidatorBoolean(),
      'cantidad'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'foto'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fot'             => new sfValidatorBoolean(array('required' => false)),
      'numero_dewey'    => new sfValidatorString(array('max_length' => 32)),
      'actualizado'     => new sfValidatorBoolean(),
      'observaciones'   => new sfValidatorString(array('max_length' => 512, 'required' => false)),
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
