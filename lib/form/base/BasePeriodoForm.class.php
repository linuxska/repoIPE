<?php

/**
 * Periodo form base class.
 *
 * @method Periodo getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BasePeriodoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'periodo'        => new sfWidgetFormInputText(),
      'inicio_periodo' => new sfWidgetFormPropelChoice(array('model' => 'Mes', 'add_empty' => false)),
      'final_periodo'  => new sfWidgetFormPropelChoice(array('model' => 'Mes', 'add_empty' => false)),
      'nombre_corto'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'periodo'        => new sfValidatorString(array('max_length' => 32)),
      'inicio_periodo' => new sfValidatorPropelChoice(array('model' => 'Mes', 'column' => 'id')),
      'final_periodo'  => new sfValidatorPropelChoice(array('model' => 'Mes', 'column' => 'id')),
      'nombre_corto'   => new sfValidatorString(array('max_length' => 16, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('periodo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Periodo';
  }


}
