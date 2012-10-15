<?php

/**
 * Curso form base class.
 *
 * @method Curso getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCursoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_materia'  => new sfWidgetFormInputText(),
      'id_profesor' => new sfWidgetFormInputText(),
      'id_salon'    => new sfWidgetFormInputText(),
      'id_periodo'  => new sfWidgetFormInputText(),
      'hora_inicio' => new sfWidgetFormTime(),
      'hora_final'  => new sfWidgetFormTime(),
      'anno'        => new sfWidgetFormInputText(),
      'estado'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_materia'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_profesor' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_salon'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id_periodo'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'hora_inicio' => new sfValidatorTime(),
      'hora_final'  => new sfValidatorTime(),
      'anno'        => new sfValidatorString(array('max_length' => 4)),
      'estado'      => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Curso';
  }


}
