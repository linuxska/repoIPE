<?php
class AlumnoEditForm extends AlumnoForm {
    public function configure() {
        parent::configure();
        unset($this['id_medio']);

}
}
?>
