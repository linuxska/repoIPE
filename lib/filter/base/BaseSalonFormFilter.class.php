<?php

/**
 * Salon filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseSalonFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'salon' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'salon' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('salon_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Salon';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'salon' => 'Text',
    );
  }
}
