<?php

/**
 * Alumno filter form base class.
 *
 * @package    ipe
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseAlumnoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'a_paterno'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'a_materno'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexo'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colonia'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cp'                   => new sfWidgetFormFilterInput(),
      'pais'                 => new sfWidgetFormFilterInput(),
      'telefono'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'celular'              => new sfWidgetFormFilterInput(),
      'e_mail'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nacimiento'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estado_civil'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'padres_nombres'       => new sfWidgetFormFilterInput(),
      'padres_direccion'     => new sfWidgetFormFilterInput(),
      'padres_colonia'       => new sfWidgetFormFilterInput(),
      'padres_ciudad'        => new sfWidgetFormFilterInput(),
      'padres_estado'        => new sfWidgetFormFilterInput(),
      'padres_cp'            => new sfWidgetFormFilterInput(),
      'padres_pais'          => new sfWidgetFormFilterInput(),
      'padres_telefono'      => new sfWidgetFormFilterInput(),
      'padres_celular'       => new sfWidgetFormFilterInput(),
      'padres_email'         => new sfWidgetFormFilterInput(),
      'pastor_nombre'        => new sfWidgetFormFilterInput(),
      'pastor_direccion'     => new sfWidgetFormFilterInput(),
      'pastor_colonia'       => new sfWidgetFormFilterInput(),
      'pastor_ciudad'        => new sfWidgetFormFilterInput(),
      'pastor_estado'        => new sfWidgetFormFilterInput(),
      'pastor_cp'            => new sfWidgetFormFilterInput(),
      'pastor_pais'          => new sfWidgetFormFilterInput(),
      'pastor_telefono'      => new sfWidgetFormFilterInput(),
      'pastor_celular'       => new sfWidgetFormFilterInput(),
      'pastor_email'         => new sfWidgetFormFilterInput(),
      'iglesia_nombre'       => new sfWidgetFormFilterInput(),
      'iglesia_direccion'    => new sfWidgetFormFilterInput(),
      'iglesia_colonia'      => new sfWidgetFormFilterInput(),
      'iglesia_estado'       => new sfWidgetFormFilterInput(),
      'iglesia_cp'           => new sfWidgetFormFilterInput(),
      'iglesia_pais'         => new sfWidgetFormFilterInput(),
      'iglesia_telefono'     => new sfWidgetFormFilterInput(),
      'iglesia_email'        => new sfWidgetFormFilterInput(),
      'iglesia_web'          => new sfWidgetFormFilterInput(),
      'emergencia_nombre'    => new sfWidgetFormFilterInput(),
      'emergencia_direccion' => new sfWidgetFormFilterInput(),
      'emergencia_colonia'   => new sfWidgetFormFilterInput(),
      'emergencia_ciudad'    => new sfWidgetFormFilterInput(),
      'emergencia_estado'    => new sfWidgetFormFilterInput(),
      'emergencia_telefono'  => new sfWidgetFormFilterInput(),
      'emergencia_celular'   => new sfWidgetFormFilterInput(),
      'fecha_conversion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_bautismo'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_llamamiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'testimonio_salvacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'testimonio_llamado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actividades_iglesia'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primaria_nombre'      => new sfWidgetFormFilterInput(),
      'primaria_ciudad'      => new sfWidgetFormFilterInput(),
      'primaria_final'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'secundaria_nombre'    => new sfWidgetFormFilterInput(),
      'secuandaria_ciudad'   => new sfWidgetFormFilterInput(),
      'secundaria_final'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'prepa_nombre'         => new sfWidgetFormFilterInput(),
      'prepa_ciudad'         => new sfWidgetFormFilterInput(),
      'otra_nombre'          => new sfWidgetFormFilterInput(),
      'otra_ciudad'          => new sfWidgetFormFilterInput(),
      'otra_fecha'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'insti_nombre'         => new sfWidgetFormFilterInput(),
      'insti_ciudad'         => new sfWidgetFormFilterInput(),
      'insti_fecha'          => new sfWidgetFormFilterInput(),
      'drogas'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alcohol'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'medicina_especial'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'medicamento_actual'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'situacion_medica'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trabajo_secular'      => new sfWidgetFormFilterInput(),
      'numero_control'       => new sfWidgetFormFilterInput(),
      'inscrito'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'foto'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'a_paterno'            => new sfValidatorPass(array('required' => false)),
      'a_materno'            => new sfValidatorPass(array('required' => false)),
      'sexo'                 => new sfValidatorPass(array('required' => false)),
      'direccion'            => new sfValidatorPass(array('required' => false)),
      'colonia'              => new sfValidatorPass(array('required' => false)),
      'ciudad'               => new sfValidatorPass(array('required' => false)),
      'estado'               => new sfValidatorPass(array('required' => false)),
      'cp'                   => new sfValidatorPass(array('required' => false)),
      'pais'                 => new sfValidatorPass(array('required' => false)),
      'telefono'             => new sfValidatorPass(array('required' => false)),
      'celular'              => new sfValidatorPass(array('required' => false)),
      'e_mail'               => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'estado_civil'         => new sfValidatorPass(array('required' => false)),
      'padres_nombres'       => new sfValidatorPass(array('required' => false)),
      'padres_direccion'     => new sfValidatorPass(array('required' => false)),
      'padres_colonia'       => new sfValidatorPass(array('required' => false)),
      'padres_ciudad'        => new sfValidatorPass(array('required' => false)),
      'padres_estado'        => new sfValidatorPass(array('required' => false)),
      'padres_cp'            => new sfValidatorPass(array('required' => false)),
      'padres_pais'          => new sfValidatorPass(array('required' => false)),
      'padres_telefono'      => new sfValidatorPass(array('required' => false)),
      'padres_celular'       => new sfValidatorPass(array('required' => false)),
      'padres_email'         => new sfValidatorPass(array('required' => false)),
      'pastor_nombre'        => new sfValidatorPass(array('required' => false)),
      'pastor_direccion'     => new sfValidatorPass(array('required' => false)),
      'pastor_colonia'       => new sfValidatorPass(array('required' => false)),
      'pastor_ciudad'        => new sfValidatorPass(array('required' => false)),
      'pastor_estado'        => new sfValidatorPass(array('required' => false)),
      'pastor_cp'            => new sfValidatorPass(array('required' => false)),
      'pastor_pais'          => new sfValidatorPass(array('required' => false)),
      'pastor_telefono'      => new sfValidatorPass(array('required' => false)),
      'pastor_celular'       => new sfValidatorPass(array('required' => false)),
      'pastor_email'         => new sfValidatorPass(array('required' => false)),
      'iglesia_nombre'       => new sfValidatorPass(array('required' => false)),
      'iglesia_direccion'    => new sfValidatorPass(array('required' => false)),
      'iglesia_colonia'      => new sfValidatorPass(array('required' => false)),
      'iglesia_estado'       => new sfValidatorPass(array('required' => false)),
      'iglesia_cp'           => new sfValidatorPass(array('required' => false)),
      'iglesia_pais'         => new sfValidatorPass(array('required' => false)),
      'iglesia_telefono'     => new sfValidatorPass(array('required' => false)),
      'iglesia_email'        => new sfValidatorPass(array('required' => false)),
      'iglesia_web'          => new sfValidatorPass(array('required' => false)),
      'emergencia_nombre'    => new sfValidatorPass(array('required' => false)),
      'emergencia_direccion' => new sfValidatorPass(array('required' => false)),
      'emergencia_colonia'   => new sfValidatorPass(array('required' => false)),
      'emergencia_ciudad'    => new sfValidatorPass(array('required' => false)),
      'emergencia_estado'    => new sfValidatorPass(array('required' => false)),
      'emergencia_telefono'  => new sfValidatorPass(array('required' => false)),
      'emergencia_celular'   => new sfValidatorPass(array('required' => false)),
      'fecha_conversion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_bautismo'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_llamamiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'testimonio_salvacion' => new sfValidatorPass(array('required' => false)),
      'testimonio_llamado'   => new sfValidatorPass(array('required' => false)),
      'actividades_iglesia'  => new sfValidatorPass(array('required' => false)),
      'primaria_nombre'      => new sfValidatorPass(array('required' => false)),
      'primaria_ciudad'      => new sfValidatorPass(array('required' => false)),
      'primaria_final'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'secundaria_nombre'    => new sfValidatorPass(array('required' => false)),
      'secuandaria_ciudad'   => new sfValidatorPass(array('required' => false)),
      'secundaria_final'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'prepa_nombre'         => new sfValidatorPass(array('required' => false)),
      'prepa_ciudad'         => new sfValidatorPass(array('required' => false)),
      'otra_nombre'          => new sfValidatorPass(array('required' => false)),
      'otra_ciudad'          => new sfValidatorPass(array('required' => false)),
      'otra_fecha'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'insti_nombre'         => new sfValidatorPass(array('required' => false)),
      'insti_ciudad'         => new sfValidatorPass(array('required' => false)),
      'insti_fecha'          => new sfValidatorPass(array('required' => false)),
      'drogas'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alcohol'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'medicina_especial'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'medicamento_actual'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'situacion_medica'     => new sfValidatorPass(array('required' => false)),
      'trabajo_secular'      => new sfValidatorPass(array('required' => false)),
      'numero_control'       => new sfValidatorPass(array('required' => false)),
      'inscrito'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'foto'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('alumno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alumno';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'nombre'               => 'Text',
      'a_paterno'            => 'Text',
      'a_materno'            => 'Text',
      'sexo'                 => 'Text',
      'direccion'            => 'Text',
      'colonia'              => 'Text',
      'ciudad'               => 'Text',
      'estado'               => 'Text',
      'cp'                   => 'Text',
      'pais'                 => 'Text',
      'telefono'             => 'Text',
      'celular'              => 'Text',
      'e_mail'               => 'Text',
      'fecha_nacimiento'     => 'Date',
      'estado_civil'         => 'Text',
      'padres_nombres'       => 'Text',
      'padres_direccion'     => 'Text',
      'padres_colonia'       => 'Text',
      'padres_ciudad'        => 'Text',
      'padres_estado'        => 'Text',
      'padres_cp'            => 'Text',
      'padres_pais'          => 'Text',
      'padres_telefono'      => 'Text',
      'padres_celular'       => 'Text',
      'padres_email'         => 'Text',
      'pastor_nombre'        => 'Text',
      'pastor_direccion'     => 'Text',
      'pastor_colonia'       => 'Text',
      'pastor_ciudad'        => 'Text',
      'pastor_estado'        => 'Text',
      'pastor_cp'            => 'Text',
      'pastor_pais'          => 'Text',
      'pastor_telefono'      => 'Text',
      'pastor_celular'       => 'Text',
      'pastor_email'         => 'Text',
      'iglesia_nombre'       => 'Text',
      'iglesia_direccion'    => 'Text',
      'iglesia_colonia'      => 'Text',
      'iglesia_estado'       => 'Text',
      'iglesia_cp'           => 'Text',
      'iglesia_pais'         => 'Text',
      'iglesia_telefono'     => 'Text',
      'iglesia_email'        => 'Text',
      'iglesia_web'          => 'Text',
      'emergencia_nombre'    => 'Text',
      'emergencia_direccion' => 'Text',
      'emergencia_colonia'   => 'Text',
      'emergencia_ciudad'    => 'Text',
      'emergencia_estado'    => 'Text',
      'emergencia_telefono'  => 'Text',
      'emergencia_celular'   => 'Text',
      'fecha_conversion'     => 'Date',
      'fecha_bautismo'       => 'Date',
      'fecha_llamamiento'    => 'Date',
      'testimonio_salvacion' => 'Text',
      'testimonio_llamado'   => 'Text',
      'actividades_iglesia'  => 'Text',
      'primaria_nombre'      => 'Text',
      'primaria_ciudad'      => 'Text',
      'primaria_final'       => 'Date',
      'secundaria_nombre'    => 'Text',
      'secuandaria_ciudad'   => 'Text',
      'secundaria_final'     => 'Date',
      'prepa_nombre'         => 'Text',
      'prepa_ciudad'         => 'Text',
      'otra_nombre'          => 'Text',
      'otra_ciudad'          => 'Text',
      'otra_fecha'           => 'Date',
      'insti_nombre'         => 'Text',
      'insti_ciudad'         => 'Text',
      'insti_fecha'          => 'Text',
      'drogas'               => 'Boolean',
      'alcohol'              => 'Boolean',
      'medicina_especial'    => 'Boolean',
      'medicamento_actual'   => 'Boolean',
      'situacion_medica'     => 'Text',
      'trabajo_secular'      => 'Text',
      'numero_control'       => 'Text',
      'inscrito'             => 'Boolean',
      'foto'                 => 'Text',
    );
  }
}
