<?php

/**
 * Libro form.
 * www.abricolabs.net
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class LibroForm extends BaseLibroForm
{

 protected $cantidad = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');
    public function configure()
  		{
 	parent::configure();
        unset($this['fot']);

        $this->setWidget('foto', new sfWidgetFormInputFile());

    	  $this->setValidator('foto', new sfValidatorFile(array(
  	     'mime_types' => 'web_images',
  	     'required' => false,
  	     'path' => sfConfig::get('sf_upload_dir').'/fotos',
  	     )));

       	$this->setWidget('cantidad', new sfWidgetFormChoice(array('choices' => $this->cantidad)));

        $this->setValidator('ano_publicacion', new sfValidatorRegex(array('pattern' => '/^[0-9]{0,4}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor maxixo debe de ser de 4 dígitos.')));
        $this->setValidator('isbn', new sfValidatorRegex(array('pattern' => '/^[0-9]{10,13}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe de ser de 10 o 13 digitos.')));

        $this->widgetSchema->setHelps(array(
            'ano_publicacion' => 'Maximo cuatro digitos',
            'nombreautor' => 'Si no tiene usar "Anónimo"',
            'apaterno_autor' => 'Si no tiene usar "Anónimo" ',
            'isbn' => 'Usar 10 o 13 digitos',
            ));

        $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
      	}

      	/*protected function doSave($con = null) {

          $id_decimal = $this->getValue('id_decimal');
          $this->object->setNumeroDewey($id_decimal);

          parent::doSave($con);
        }*/
}
