<?php

/**  Revisar que pasen todos los documentos en true
 * Alumno form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class AlumnoForm extends BaseAlumnoForm
{

  	const ID_GRUPO_ALUMNO = 49;

    protected $estado_civil = array('Soltero' => 'Soltero(a)','Divorciado' => 'Divorciado(a)', 'Casado' => 'Casado(a)','Viudo' => 'Viudo(a)');

    protected $genero = array('masculino' => 'Masculino', 'femenino' => 'Femenino');
    protected $estado = array('AGUASCALIENTES' => 'AGUASCALIENTES', 'BAJA CALIFORNIA' => 'BAJA CALIFORNIA', 'BAJA CALIFORNIA SUR' => 'BAJA CALIFORNIA SUR', 'CAMPECHE' => 'CAMPECHE',
        'CHIAPAS' => 'CHIAPAS', 'CHIHUAHUA' => 'CHIHUAHUA', 'COAHUILA DE ZARAGOZA' => 'COAHUILA DE ZARAGOZA', 'COLIMA' => 'COLIMA', 'CIUDAD DE MÉXICO' => 'CIUDAD DE MÉXICO',
        'DURANGO' => 'DURANGO', 'GUANAJUATO' => 'GUANAJUATO', 'GUERRERO' => 'GUERRERO', 'HIDALGO' => 'HIDALGO', 'JALISCO' => 'JALISCO', 'MÉXICO' => 'MÉXICO', 'MICHOACÁN DE OCAMPO' => 'MICHOACÁN DE OCAMPO',
        'MORELOS' => 'MORELOS', 'NAYARIT' => 'NAYARIT', 'NUEVO LEÓN' => 'NUEVO LEÓN', 'OAXACA' => 'OAXACA', 'PUEBLA' => 'PUEBLA', 'QUERÉTARO' => 'QUERÉTARO', 'QUINTANA ROO' => 'QUINTANA ROO',
        'SAN LUIS POTOSÍ' => 'SAN LUIS POTOSÍ', 'SINALOA' => 'SINALOA', 'SONORA' => 'SONORA', 'TABASCO' => 'TABASCO', 'TAMAULIPAS' => 'TAMAULIPAS', 'TLAXCALA' => 'TLAXCALA',
        'VERACRUZ DE IGNACIO DE LA LLAVE' => 'VERACRUZ DE IGNACIO DE LA LLAVE', 'YUCATÁN' => 'YUCATÁN', 'ZACATECAS' => 'ZACATECAS','EUA' => 'EUA');

    public function configure() {
        parent::configure();
        unset($this['numero_control'], $this['inscrito'],$this['foto'], $this['preparatoria_pastor']);

        $this->setWidget('sexo', new sfWidgetFormChoice(array('choices' => $this->genero)));
        $this->setWidget('estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
        $this->setWidget('padres_estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
        $this->setWidget('pastor_estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
        $this->setWidget('emergencia_estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
        $this->setWidget('iglesia_estado', new sfWidgetFormChoice(array('choices' => $this->estado)));

        $this->setWidget('estado_civil', new sfWidgetFormChoice(array('choices' => $this->estado_civil)));
        $this->setWidget('fecha_nacimiento', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('fecha_conversion', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('fecha_bautismo', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('fecha_llamamiento', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('primaria_final', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('secundaria_final', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('otra_fecha', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('insti_fecha', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));



        $this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['a_paterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['a_materno']->setMessage('required', 'Requerido');
        $this->validatorSchema['direccion']->setMessage('required', 'Requerido');
        $this->validatorSchema['colonia']->setMessage('required', 'Requerido');
        $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');
        $this->validatorSchema['fecha_nacimiento']->setMessage('required', 'Requerido');
        $this->validatorSchema['fecha_conversion']->setMessage('required', 'Requerido');
        $this->validatorSchema['fecha_bautismo']->setMessage('required', 'Requerido');
        $this->validatorSchema['fecha_llamamiento']->setMessage('required', 'Requerido');
        $this->validatorSchema['primaria_final']->setMessage('required', 'Requerido');
        $this->validatorSchema['secundaria_final']->setMessage('required', 'Requerido');
        $this->validatorSchema['otra_fecha']->setMessage('required', 'Requerido');
        $this->validatorSchema['e_mail']->setMessage('required', 'Requerido');
        //$this->validatorSchema['testimonio_salvacion']->setMessage('required', 'Requerido');
        //$this->validatorSchema['testimonio_llamado']->setMessage('required', 'Requerido');
        //$this->validatorSchema['actividades_iglesia']->setMessage('required', 'Requerido');
        $this->validatorSchema['situacion_medica']->setMessage('required', 'Requerido');

        // Documentos necesarios [ Pendiente de hacer que funcione ]
        $this->validatorSchema['recomendacion_pastor']->setMessage('required', 'Requerido');
        $this->validatorSchema['carta_recomedacion_hermano']->setMessage('required', 'Requerido');
        $this->validatorSchema['certificado_medico']->setMessage('required', 'Requerido');
        $this->validatorSchema['acta_nacimiento']->setMessage('required', 'Requerido');
        $this->validatorSchema['fotografias']->setMessage('required', 'Requerido');



        $this->validatorSchema['nombre']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_paterno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_materno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['direccion']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['colonia']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['ciudad']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');


        $this->setValidator('estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('padres_estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('pastor_estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('emergencia_estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));

        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
        $this->setValidator('padres_cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
        $this->setValidator('pastor_cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
        $this->setValidator('iglesia_cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));

        $this->setValidator('sexo', new sfValidatorChoice(array('choices' => array_keys($this->genero), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));

        $this->setValidator('telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('celular', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('padres_telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('padres_celular', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('pastor_telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('pastor_celular', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('iglesia_telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('emergencia_celular', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('emergencia_telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));

        $this->setDefault('pais', 'Mexico');
        $this->setDefault('padres_pais', 'Mexico');
        $this->setDefault('pastor_pais', 'Mexico');
        $this->setDefault('iglesia_pais', 'Mexico');


        $this->setValidator('e_mail', new sfValidatorEmail(array('max_length' => 128, 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));
        $this->setValidator('padres_email', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));
        $this->setValidator('pastor_email', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));
        $this->setValidator('iglesia_email', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));
        $this->setValidator('emergencia_email', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));

        $this->mergePostValidator(new ValidatorDocumentosAlumnos());
        $this->widgetSchema->setLabels(array(
            'nombre' => 'Nombre(s)',
            'a_paterno' => 'Apellido Paterno',
            'a_materno' => 'Apellido Materno',
            'direccion' => 'Dirección',
            'cp' => 'Código Postal',
            'fecha_nacimiento' => 'Fecha de Nacimiento',
            'telefono' => 'Teléfono',
            'e_mail' => 'Correo Electrónico',
            'instituto_empresa' => 'Instituto, Empresa<br /> u Ocupación',
            'padres_nombres' =>   'Nombre de sus padres',
            'padres_direccion' => 'Dirección de sus padres',
            'padres_colonia' => 'Colonia de los padres',
            'padres_ciudad' => 'Ciudad de los padres',
            'padres_estado' => 'Estado de los padres',
            'padres_cp' => 'CP de los padres',
            'padres_pais' => 'Pais de los padres',
            'padres_telefono' => 'Teléfono de los padres',
            'padres_celular' => 'Celular de los padres',
            'padres_email' => 'Correo Electrónico de los padres',
            'pastor_nombres' =>   'Nombre de su pastor',
            'pastor_direccion' => 'Dirección de su pastor',
            'pastor_colonia' => 'Colonia de  su pastor',
            'pastor_ciudad' => 'Ciudad de su pastor',
            'pastor_estado' => 'Estado de su pastor',
            'pastor_cp' => 'CP de su pastor',
            'pastor_pais' => 'Pais de su pastor',
            'pastor_telefono' => 'Teléfono de su pastor',
            'pastor_celular' => 'Celular de su pastor',
            'pastor_email' => 'Correo Electrónico de su pastor',
            'iglesia_nombre' =>   'Nombre de su pastor',
            'iglesia_direccion' => 'Dirección de su pastor',
            'iglesia_colonia' => 'Colonia de  su pastor',
            'iglesia_estado' => 'Estado de su pastor',
            'iglesia_cp' => 'CP de su pastor',
            'iglesia_pais' => 'Pais de su pastor',
            'iglesia_telefono' => 'Teléfono de su pastor',
            'emergencia_nombre' =>   'Nombre de contacto',
            'emergencia_direccion' => 'Dirección de contacto',
            'emergencia_colonia' => 'Colonia de contacto',
            'emergencia_ciudad' => 'Pais de contacto',
            'emergencia_estado' => 'Estado de contacto',
            'emergencia_celular' => 'Celular de contacto',
            'emergencia_telefono' => 'Teléfono de contacto',
            'emergencia_email' => 'Correo Electrónico de contacto',
            'primaria_nombre' => 'Nombre de tu primaria',
            'primaria_ciudad' => 'Ciudad de la primaria',
            'primaria_final' => 'Fecha terminación primaria',
            'secundaria_nombre' => 'Nombre de tu secundaria',
            'secuandaria_ciudad' => 'Ciudad de la secundaria',
            'secundaria_final' => 'Fecha terminación secundaria',
            'prepa_nombre' => 'Nombre de tu preparatoria',
            'prepa_ciudad' => 'Ciudad de la preparatoria',
             //'prepa_final' => 'Fecha terminación primaria',
			'otra_nombre' => 'Nombre escuela',
            'otra_ciudad' => 'Ciudad de la escuela',
            'otra_final' => 'Fecha terminación escuela',

            'insti_nombre' => 'Nombre del instituto anterior',
            'insti_ciudad' => 'Ciudad del instituto anterior',
            'insti_fecha' => 'Fecha terminación del instituto anterior',
            'drogas' => 'Has consumido drogas?',
            'alcohol' => 'Has consumido alcohol?',
            'medicina_especial' => 'Tomas algun medicamento especial?',
            'medicamento_actual' => 'Estas bajo medicamento?'
        ));

        $this->widgetSchema->setHelps(array(
            'cp' => '#####',
            'padres_cp' => '#####',
            'iglesia_cp' => '#####',
            'pastor_cp' => '#####',
            'telefono' => '##########',
            'celular' => '##########',
            'padres_telefono' => '##########',
            'pastor_telefono' => '##########',
            'iglesia_telefono' => '##########',
            'emergencia_telefono' => '##########',
            'padres_celular' => '##########',
            'pastor_celular' => '##########',
            'emergencia_celular' => '##########',
            'email' => 'juan.perez@example.com',
            'padres_email' => 'juan.perez@example.com',
            'pastor_email' => 'juan.perez@example.com',
            'iglesia_email' => 'juan.perez@example.com',
            'iglesia_web' => 'www.paginaweb.com',
            'fecha_nacimiento' => 'DD-MM-YYYY',
            'fecha_conversion' => 'DD-MM-YYYY',
            'fecha_bautismo' => 'DD-MM-YYYY',
            'fecha_llamamiento' => 'DD-MM-YYYY',
			'medicina_especial' => 'De ser afirmativo describe cual es debajo.',
            'medicamento_actual' => 'De ser afirmativo describe cual es debajo.',
            'primaria_final' => 'DD-MM-YYYY',
            'secundaria_final' => 'DD-MM-YYYY',
            'otra_fecha' => 'DD-MM-YYYY',
            'insti_fecha'=> 'DD-MM-YYYY'
        ));
        /*
        $this->widgetSchema['fecha_nacimiento'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['fecha_llamamiento'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['fecha_conversion'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['fecha_bautismo'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['secundaria_final'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['primaria_final'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['insti_fecha'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
        $this->widgetSchema['otra_fecha'] = new  sfWidgetFormJQueryDate(array(
         'culture' => 'es',
         'config' => "
          {firstDay: 1,
           dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
          }",
          'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
                */
        $this->widgetSchema['testimonio_salvacion'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->widgetSchema['testimonio_llamado'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->widgetSchema['actividades_iglesia'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->widgetSchema['situacion_medica'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->widgetSchema['trabajo_secular'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->widgetSchema['peticion_oracion'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));

    }
}
