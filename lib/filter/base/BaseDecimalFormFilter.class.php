<?php

/**
 * Decimal filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseDecimalFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_entero'   => new sfWidgetFormPropelChoice(array('model' => 'Entero', 'add_empty' => true)),
      'numero'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_entero'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Entero', 'column' => 'id')),
      'numero'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('decimal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Decimal';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'id_entero'   => 'ForeignKey',
      'numero'      => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
    );
  }
}
