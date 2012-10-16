<?php

/**
 * Decimal form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class DecimalForm extends BaseDecimalForm
{
  public function configure()
  {
  	 	$this->widgetSchema->setHelps(array(
  		    'numero' => 'Formato de 1 a 3 digitos numericos sin espacios #-###',
            'nombre' => 'Nombre de la clasificación dewey',
            ));

    $this->setValidator('numero', new sfValidatorRegex(array('pattern' => '/^[0-9]{0,3}+$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 3 dígitos.')));


        $this->widgetSchema['descripcion'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
  
  
  }
}
