<?php

/**
 * Alumno form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class AlumnoForm extends BaseAlumnoForm
{


  	 const ID_GRUPO_ALUMNO = 5;

    protected $genero = array('masculino' => 'Masculino', 'femenino' => 'Femenino');
    protected $estado = ARRAY('AGUASCALIENTES' => 'AGUASCALIENTES', 'BAJA CALIFORNIA' => 'BAJA CALIFORNIA', 'BAJA CALIFORNIA SUR' => 'BAJA CALIFORNIA SUR', 'CAMPECHE' => 'CAMPECHE',
        'CHIAPAS' => 'CHIAPAS', 'CHIHUAHUA' => 'CHIHUAHUA', 'COAHUILA DE ZARAGOZA' => 'COAHUILA DE ZARAGOZA', 'COLIMA' => 'COLIMA', 'CIUDAD DE MÉXICO' => 'CIUDAD DE MÉXICO',
        'DURANGO' => 'DURANGO', 'GUANAJUATO' => 'GUANAJUATO', 'GUERRERO' => 'GUERRERO', 'HIDALGO' => 'HIDALGO', 'JALISCO' => 'JALISCO', 'MÉXICO' => 'MÉXICO', 'MICHOACÁN DE OCAMPO' => 'MICHOACÁN DE OCAMPO',
        'MORELOS' => 'MORELOS', 'NAYARIT' => 'NAYARIT', 'NUEVO LEÓN' => 'NUEVO LEÓN', 'OAXACA' => 'OAXACA', 'PUEBLA' => 'PUEBLA', 'QUERÉTARO' => 'QUERÉTARO', 'QUINTANA ROO' => 'QUINTANA ROO',
        'SAN LUIS POTOSÍ' => 'SAN LUIS POTOSÍ', 'SINALOA' => 'SINALOA', 'SONORA' => 'SONORA', 'TABASCO' => 'TABASCO', 'TAMAULIPAS' => 'TAMAULIPAS', 'TLAXCALA' => 'TLAXCALA',
        'VERACRUZ DE IGNACIO DE LA LLAVE' => 'VERACRUZ DE IGNACIO DE LA LLAVE', 'YUCATÁN' => 'YUCATÁN', 'ZACATECAS' => 'ZACATECAS');    

    public function configure() {
        parent::configure();
        unset($this['no_control'], $this['inscrito']);

        $this->setWidget('sexo', new sfWidgetFormChoice(array('choices' => $this->genero)));
        $this->setWidget('estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
        $this->setWidget('fecha_nacimiento', new sfWidgetFormDate(array(
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
        

        $this->validatorSchema['nombre']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_paterno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_materno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['direccion']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['colonia']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['ciudad']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        
        
        $this->setValidator('estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
        $this->setValidator('sexo', new sfValidatorChoice(array('choices' => array_keys($this->genero), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('e_mail', new sfValidatorEmail(array('max_length' => 128, 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));
        
        $this->setDefault('estado', 'Guanajuato');
        $this->setDefault('ciudad', 'Celaya');

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
            'id_medio' => 'Medio',
            'informacion' => 'Información'
        ));

        $this->widgetSchema->setHelps(array(
            'cp' => '#####',
            'telefono' => '##########',
            'email' => 'juan.perez@example.com',
            'fecha_nacimiento' => 'DD-MM-YYYY'
        ));

    }



}
