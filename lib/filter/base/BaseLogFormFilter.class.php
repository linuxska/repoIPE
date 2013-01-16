<?php

/**
 * Log filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseLogFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipo_usuario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_log'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'      => new sfWidgetFormFilterInput(),
      'mensaje'      => new sfWidgetFormFilterInput(),
      'nombre_tabla' => new sfWidgetFormFilterInput(),
      'serialized'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'tipo_usuario' => new sfValidatorPass(array('required' => false)),
      'tipo_log'     => new sfValidatorPass(array('required' => false)),
      'usuario'      => new sfValidatorPass(array('required' => false)),
      'mensaje'      => new sfValidatorPass(array('required' => false)),
      'nombre_tabla' => new sfValidatorPass(array('required' => false)),
      'serialized'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'fecha'        => 'Date',
      'tipo_usuario' => 'Text',
      'tipo_log'     => 'Text',
      'usuario'      => 'Text',
      'mensaje'      => 'Text',
      'nombre_tabla' => 'Text',
      'serialized'   => 'Text',
    );
  }
}
