<?php

/**
 * Mes filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mes';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'nombre' => 'Text',
    );
  }
}
