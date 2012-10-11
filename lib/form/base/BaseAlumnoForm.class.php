<?php

/**
 * Alumno form base class.
 *
 * @method Alumno getObject() Returns the current form's model object
 *
 * @package    ipe
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlumnoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'nombre'               => new sfWidgetFormInputText(),
      'a_paterno'            => new sfWidgetFormInputText(),
      'a_materno'            => new sfWidgetFormInputText(),
      'sexo'                 => new sfWidgetFormInputText(),
      'direccion'            => new sfWidgetFormInputText(),
      'colonia'              => new sfWidgetFormInputText(),
      'ciudad'               => new sfWidgetFormInputText(),
      'estado'               => new sfWidgetFormInputText(),
      'cp'                   => new sfWidgetFormInputText(),
      'pais'                 => new sfWidgetFormInputText(),
      'telefono'             => new sfWidgetFormInputText(),
      'celular'              => new sfWidgetFormInputText(),
      'e_mail'               => new sfWidgetFormInputText(),
      'fecha_nacimiento'     => new sfWidgetFormDate(),
      'estado_civil'         => new sfWidgetFormInputText(),
      'padres_nombres'       => new sfWidgetFormInputText(),
      'padres_direccion'     => new sfWidgetFormInputText(),
      'padres_colonia'       => new sfWidgetFormInputText(),
      'padres_ciudad'        => new sfWidgetFormInputText(),
      'padres_estado'        => new sfWidgetFormInputText(),
      'padres_cp'            => new sfWidgetFormInputText(),
      'padres_pais'          => new sfWidgetFormInputText(),
      'padres_telefono'      => new sfWidgetFormInputText(),
      'padres_celular'       => new sfWidgetFormInputText(),
      'padres_email'         => new sfWidgetFormInputText(),
      'pastor_nombre'        => new sfWidgetFormInputText(),
      'pastor_direccion'     => new sfWidgetFormInputText(),
      'pastor_colonia'       => new sfWidgetFormInputText(),
      'pastor_ciudad'        => new sfWidgetFormInputText(),
      'pastor_estado'        => new sfWidgetFormInputText(),
      'pastor_cp'            => new sfWidgetFormInputText(),
      'pastor_pais'          => new sfWidgetFormInputText(),
      'pastor_telefono'      => new sfWidgetFormInputText(),
      'pastor_celular'       => new sfWidgetFormInputText(),
      'pastor_email'         => new sfWidgetFormInputText(),
      'iglesia_nombre'       => new sfWidgetFormInputText(),
      'iglesia_direccion'    => new sfWidgetFormInputText(),
      'iglesia_colonia'      => new sfWidgetFormInputText(),
      'iglesia_estado'       => new sfWidgetFormInputText(),
      'iglesia_cp'           => new sfWidgetFormInputText(),
      'iglesia_pais'         => new sfWidgetFormInputText(),
      'iglesia_telefono'     => new sfWidgetFormInputText(),
      'iglesia_email'        => new sfWidgetFormInputText(),
      'iglesia_web'          => new sfWidgetFormInputText(),
      'emergencia_nombre'    => new sfWidgetFormInputText(),
      'emergencia_direccion' => new sfWidgetFormInputText(),
      'emergencia_colonia'   => new sfWidgetFormInputText(),
      'emergencia_ciudad'    => new sfWidgetFormInputText(),
      'emergencia_estado'    => new sfWidgetFormInputText(),
      'emergencia_telefono'  => new sfWidgetFormInputText(),
      'emergencia_celular'   => new sfWidgetFormInputText(),
      'fecha_conversion'     => new sfWidgetFormDate(),
      'fecha_bautismo'       => new sfWidgetFormDate(),
      'fecha_llamamiento'    => new sfWidgetFormDate(),
      'testimonio_salvacion' => new sfWidgetFormTextarea(),
      'testimonio_llamado'   => new sfWidgetFormTextarea(),
      'actividades_iglesia'  => new sfWidgetFormTextarea(),
      'primaria_nombre'      => new sfWidgetFormInputText(),
      'primaria_ciudad'      => new sfWidgetFormInputText(),
      'primaria_final'       => new sfWidgetFormDate(),
      'secundaria_nombre'    => new sfWidgetFormInputText(),
      'secuandaria_ciudad'   => new sfWidgetFormInputText(),
      'secundaria_final'     => new sfWidgetFormDate(),
      'prepa_nombre'         => new sfWidgetFormInputText(),
      'prepa_ciudad'         => new sfWidgetFormInputText(),
      'otra_nombre'          => new sfWidgetFormInputText(),
      'otra_ciudad'          => new sfWidgetFormInputText(),
      'otra_fecha'           => new sfWidgetFormDate(),
      'insti_nombre'         => new sfWidgetFormInputText(),
      'insti_ciudad'         => new sfWidgetFormInputText(),
      'insti_fecha'          => new sfWidgetFormInputText(),
      'drogas'               => new sfWidgetFormInputCheckbox(),
      'alcohol'              => new sfWidgetFormInputCheckbox(),
      'medicina_especial'    => new sfWidgetFormInputCheckbox(),
      'medicamento_actual'   => new sfWidgetFormInputCheckbox(),
      'situacion_medica'     => new sfWidgetFormTextarea(),
      'trabajo_secular'      => new sfWidgetFormTextarea(),
      'inscrito'             => new sfWidgetFormInputCheckbox(),
      'foto'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 64)),
      'a_paterno'            => new sfValidatorString(array('max_length' => 64)),
      'a_materno'            => new sfValidatorString(array('max_length' => 64)),
      'sexo'                 => new sfValidatorString(array('max_length' => 9)),
      'direccion'            => new sfValidatorString(array('max_length' => 64)),
      'colonia'              => new sfValidatorString(array('max_length' => 64)),
      'ciudad'               => new sfValidatorString(array('max_length' => 64)),
      'estado'               => new sfValidatorString(array('max_length' => 64)),
      'cp'                   => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'pais'                 => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'telefono'             => new sfValidatorString(array('max_length' => 12)),
      'celular'              => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'e_mail'               => new sfValidatorString(array('max_length' => 128)),
      'fecha_nacimiento'     => new sfValidatorDate(),
      'estado_civil'         => new sfValidatorString(array('max_length' => 32)),
      'padres_nombres'       => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'padres_direccion'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'padres_colonia'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'padres_ciudad'        => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'padres_estado'        => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'padres_cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'padres_pais'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'padres_telefono'      => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'padres_celular'       => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'padres_email'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'pastor_nombre'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'pastor_direccion'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pastor_colonia'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pastor_ciudad'        => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pastor_estado'        => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pastor_cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'pastor_pais'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pastor_telefono'      => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'pastor_celular'       => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'pastor_email'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'iglesia_nombre'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'iglesia_direccion'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'iglesia_colonia'      => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'iglesia_estado'       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'iglesia_cp'           => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'iglesia_pais'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'iglesia_telefono'     => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'iglesia_email'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'iglesia_web'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'emergencia_nombre'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'emergencia_direccion' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'emergencia_colonia'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'emergencia_ciudad'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'emergencia_estado'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'emergencia_telefono'  => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'emergencia_celular'   => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'fecha_conversion'     => new sfValidatorDate(),
      'fecha_bautismo'       => new sfValidatorDate(),
      'fecha_llamamiento'    => new sfValidatorDate(),
      'testimonio_salvacion' => new sfValidatorString(),
      'testimonio_llamado'   => new sfValidatorString(),
      'actividades_iglesia'  => new sfValidatorString(),
      'primaria_nombre'      => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'primaria_ciudad'      => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'primaria_final'       => new sfValidatorDate(array('required' => false)),
      'secundaria_nombre'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'secuandaria_ciudad'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'secundaria_final'     => new sfValidatorDate(array('required' => false)),
      'prepa_nombre'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'prepa_ciudad'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'otra_nombre'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'otra_ciudad'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'otra_fecha'           => new sfValidatorDate(array('required' => false)),
      'insti_nombre'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'insti_ciudad'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'insti_fecha'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'drogas'               => new sfValidatorBoolean(),
      'alcohol'              => new sfValidatorBoolean(),
      'medicina_especial'    => new sfValidatorBoolean(),
      'medicamento_actual'   => new sfValidatorBoolean(),
      'situacion_medica'     => new sfValidatorString(),
      'trabajo_secular'      => new sfValidatorString(array('required' => false)),
      'inscrito'             => new sfValidatorBoolean(),
      'foto'                 => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('alumno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alumno';
  }


}
