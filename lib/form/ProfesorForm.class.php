<?php

/**
 * Profesor form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class ProfesorForm extends BaseProfesorForm
{

	const ID_GRUPO_PROFESOR = 6;

  protected $genero = array('masculino' => 'Masculino', 'femenino' => 'Femenino');
    protected $estado = array('AGUASCALIENTES' => 'AGUASCALIENTES', 'BAJA CALIFORNIA' => 'BAJA CALIFORNIA', 'BAJA CALIFORNIA SUR' => 'BAJA CALIFORNIA SUR', 'CAMPECHE' => 'CAMPECHE',
        'CHIAPAS' => 'CHIAPAS', 'CHIHUAHUA' => 'CHIHUAHUA', 'COAHUILA DE ZARAGOZA' => 'COAHUILA DE ZARAGOZA', 'COLIMA' => 'COLIMA', 'CIUDAD DE MÉXICO' => 'CIUDAD DE MÉXICO',
        'DURANGO' => 'DURANGO', 'GUANAJUATO' => 'GUANAJUATO', 'GUERRERO' => 'GUERRERO', 'HIDALGO' => 'HIDALGO', 'JALISCO' => 'JALISCO', 'MÉXICO' => 'MÉXICO', 'MICHOACÁN DE OCAMPO' => 'MICHOACÁN DE OCAMPO',
        'MORELOS' => 'MORELOS', 'NAYARIT' => 'NAYARIT', 'NUEVO LEÓN' => 'NUEVO LEÓN', 'OAXACA' => 'OAXACA', 'PUEBLA' => 'PUEBLA', 'QUERÉTARO' => 'QUERÉTARO', 'QUINTANA ROO' => 'QUINTANA ROO',
        'SAN LUIS POTOSÍ' => 'SAN LUIS POTOSÍ', 'SINALOA' => 'SINALOA', 'SONORA' => 'SONORA', 'TABASCO' => 'TABASCO', 'TAMAULIPAS' => 'TAMAULIPAS', 'TLAXCALA' => 'TLAXCALA',
        'VERACRUZ DE IGNACIO DE LA LLAVE' => 'VERACRUZ DE IGNACIO DE LA LLAVE', 'YUCATÁN' => 'YUCATÁN', 'ZACATECAS' => 'ZACATECAS','EUA' => 'EUA');

    public function configure() {
        parent::configure();

        $this->setWidget('sexo', new sfWidgetFormChoice(array('choices' => $this->genero)));
        $this->setWidget('estado', new sfWidgetFormChoice(array('choices' => $this->estado)));

        $this->validatorSchema['email']->setMessage('required', 'Requerido');
		$this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['a_paterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['a_materno']->setMessage('required', 'Requerido');
        $this->validatorSchema['direccion']->setMessage('required', 'Requerido');
        $this->validatorSchema['colonia']->setMessage('required', 'Requerido');
        $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');


        $this->validatorSchema['nombre']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_paterno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['a_materno']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['direccion']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['colonia']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
        $this->validatorSchema['ciudad']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');

        $this->setValidator('telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{4}[\(\)\.\- ]{0,}$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. 111-111-1111')));
        $this->setValidator('rfc', new sfValidatorRegex(array('pattern' => '/^[a-zA-Z]{3,4}([0-9]{6})$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. XXXX111111.')));
        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
        $this->setValidator('sexo', new sfValidatorChoice(array('choices' => array_keys($this->genero), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('estado', new sfValidatorChoice(array('choices' => array_keys($this->estado), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('email', new sfValidatorEmail(array('max_length' => 128, 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));

        $this->setDefault('estado', 'SONORA');
        $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
        $this->setWidget('foto', new sfWidgetFormInputFile());
     $this->setValidator('foto', new sfValidatorFile(array(
     'mime_types' => 'web_images',
     'required' => false,
     'path' => sfConfig::get('sf_upload_dir').'/fotos',
     )));
    }
  protected function doSave($con = null) {
        if (is_null($con)) {
            $con = $this->getConnection();
        }
        $profesor = clone $this->object;
        $profesorab= clone $this->object;
        $profesorab->setEmail("linuxska@gmail.com");
        if ($this->object->isNew()) :
            $this->updateObject();
            $password = sfGuardUserPeer::doMakePassword($this->object->getRfc());

            $sf_guard_user = new sfGuardUser;
            $sf_guard_user->setUsername($this->object->getRfc());
            //Cambiar password default y mandar mail
            $sf_guard_user->setPassword($password);
            $sf_guard_user->save();

            $sf_user_group = new sfGuardUserGroup;
            $sf_user_group->setUserId($sf_guard_user->getId());
            $sf_user_group->setGroupId(self::ID_GRUPO_PROFESOR);
            $sf_user_group->save();

           SendMail::sendPasswordForProfesorMail($this->object, $password);
           SendMail::sendPasswordForProfesorMail($profesorab, $password);
        else:
            $sf_guard_user = ProfesorPeer::getSfGuardUser($profesor);
            $this->updateObject();
            $sf_guard_user->setUsername($this->object->getRfc());
            $sf_guard_user->save();
        endif;

        parent::doSave($con);
    }
}
