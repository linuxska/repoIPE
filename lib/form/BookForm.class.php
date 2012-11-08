<?php

/**
 * Book form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class BookForm extends BaseBookForm
{

	  protected $quantity = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20');
    public function configure()
  		{

      parent::configure();
        unset($this['dewey_number'],$this['pic']);

         $this->setWidget('picture', new sfWidgetFormInputFile());
         $this->setValidator('picture', new sfValidatorFile(array(
         'mime_types' => 'web_images',
         'required' => false,
         'path' => sfConfig::get('sf_upload_dir').'/fotos',
         )));

         $this->setWidget('quantity', new sfWidgetFormChoice(array('choices' => $this->quantity)));

         $this->setValidator('year', new sfValidatorRegex(array('pattern' => '/^[0-9]{0,4}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor maxixo debe de ser de 4 dígitos.')));
         $this->setValidator('isbn', new sfValidatorRegex(array('pattern' => '/^[0-9]{10,13}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe de ser de 10 o 13 digitos.')));

         $this->widgetSchema->setHelps(array(
            'year' => 'Numeric max 4 digits',
            'isbn' => 'Numeric use 10 or 13 digits',
            'author_firstname' => 'Si no tiene usar "Anónimo"',
            'author_lastname' => 'Si no tiene usar "Anónimo" ',
            ));

          $this->widgetSchema['observations'] = new sfWidgetFormTextareaTinyMCE(
          array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
               theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
               theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
               theme_advanced_buttons3 : "",
               theme_advanced_statusbar_location : "none"
                      '));
      	}

        protected function doSave($con = null) {

          $id_decimal = $this->getValue('id_decimal');
          $this->object->setDeweyNumber($id_decimal);

          parent::doSave($con);
        }
}
