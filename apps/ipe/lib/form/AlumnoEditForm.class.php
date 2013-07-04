<?php
class AlumnoEditForm extends AlumnoForm {
    public function configure() {
        parent::configure();
        unset($this['id_medio'],
        	  $this['fecha_conversion'],
        	  $this['fecha_bautismo'],
        	  $this['fecha_llamamiento'],
        	  $this['testimonio_salvacion'],
        	  $this['testimonio_llamado'],
        	  $this['actividades_iglesia'],
        	  $this['primaria_nombre'],
        	  $this['primaria_ciudad'],
        	  $this['primaria_final'],
        	  $this['secundaria_nombre'],
        	  $this['secundaria_ciudad'],
        	  $this['secundaria_final'],
        	  $this['prepa_nombre'],
        	  $this['prepa_ciudad'],
        	  $this['prepa_final'],
        	  $this['otra_nombre'],
        	  $this['otra_ciudad'],
        	  $this['otra_fecha'],
        	  $this['insti_nombre'],
        	  $this['insti_ciudad'],
        	  $this['insti_fecha'],
        	  $this['drogas'],
        	  $this['alcohol'],
        	  $this['medicina_especial'],
        	  $this['medicamento_actual'],
        	  $this['situacion_medica'],

        	  $this['trabajo_secular'],

        	  $this['peticion_oracion'],
        	  $this['recomendacion_pastor'],
        	  $this['acta_matrimonio'],
        	  $this['acta_nacimiento'],
        	  $this['carta_recomedacion_hermano'],
        	  $this['certificado_medico'],
        	  $this['fotografias']);
}
}
?>
