<?php

/**
 * FolioControl filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseFolioControlFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'anno'        => new sfWidgetFormFilterInput(),
      'consecutivo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'anno'        => new sfValidatorPass(array('required' => false)),
      'consecutivo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('folio_control_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FolioControl';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'anno'        => 'Text',
      'consecutivo' => 'Number',
    );
  }
}
