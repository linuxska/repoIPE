<?php

/**
 * alumno module helper.
 *
 * @package    ipe
 * @subpackage alumno
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class alumnoGeneratorHelper extends BaseAlumnoGeneratorHelper
{
	 public function linkToEliminarPreinscritos() {
        return sprintf('<a href="%s">Eliminar Alumnos Preinscritos</a>', url_for('@alumno_eliminar_preinscritos'));
    }
}
