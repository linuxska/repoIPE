<?php


class DosificacionesForm extends BaseDosificacionTematicaForm {
	
	public function configure() {
		parent::configure();
		
		unset(
			$this['id'],
			$this['id_curso'],
			$this['id_estado'],
			$this['id_dosificacion_tematica']

		);
		

		$this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
		array('theme'=>'advanced','width'=>400,'height'=>200,'config'=>'readonly:1,language:"es",theme_advanced_toolbar_location:"bottom",
		     theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,undo,redo,separator,forecolor,backcolor",
		     theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator,cut,copy,paste",
		     theme_advanced_buttons3 : "",
		     theme_advanced_statusbar_location : "none"
		            '));
		$this->widgetSchema['informacion_adicional'] = new sfWidgetFormTextareaTinyMCE(
		array('theme'=>'advanced','width'=>400,'height'=>200,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
		     theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,undo,redo,separator,forecolor,backcolor",
		     theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator,cut,copy,paste",
		     theme_advanced_buttons3 : "",
		     theme_advanced_statusbar_location : "none"
		            '));

		//$dosificacion = $this->object->getDosificacionTematicaProgramacions($this->options['criteria']);

		$dosificacion_form = new sfForm();	
		$this->embedForm('dosificacion' , $dosificacion_form);	
	}
	
}

