<?php
	class ProfesorEditForm extends ProfesorForm {
	    	public function configure() {
        parent::configure();
        unset($this['activo'],$this['observaciones']);

		}
	}
?>
