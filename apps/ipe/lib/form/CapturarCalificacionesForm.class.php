<?php

class CapturarCalificacionesForm extends BaseCursoForm {
	
	public function configure() {
		parent::configure();
		
		unset(
			$this['no_control'],
			$this['id_profesor'],
			$this['id_periodo'],
			$this['id_materia'],
			$this['id_salon'],
			$this['hora_inicio'],
			$this['hora_final'],
			$this['anno']
		);
		
		$listas = $this->object->getListas($this->options['criteria']);
		
		$i = 0;
		foreach ($listas as $lista):
			$form = new ListaProfesorForm($lista);
			
			$this->embedForm('lista_' . $i++, $form);
		endforeach;
	}
}
