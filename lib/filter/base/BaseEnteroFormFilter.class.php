<?php

/**
 * Entero filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseEnteroFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'numero'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entero_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entero';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'numero'      => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
    );
  }
}
