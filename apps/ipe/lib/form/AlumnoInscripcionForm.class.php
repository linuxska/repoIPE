<?php

class AlumnoInscripcionForm extends AlumnoForm {
 public function configure() {
        parent::configure();

        unset($this['numero_control'], $this['inscrito']);

    }
}
