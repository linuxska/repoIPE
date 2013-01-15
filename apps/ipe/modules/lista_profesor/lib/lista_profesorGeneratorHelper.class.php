<?php

/**
 * lista_profesor module helper.
 *
 * @package    ipe
 * @subpackage lista_profesor
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class lista_profesorGeneratorHelper extends BaseLista_profesorGeneratorHelper
{
	public function linkToVerLista($object, $params) {
		return sprintf('<a href="%s">Ver</a>', url_for('@lista?id=' . $object->getId()));
	}

	public function linkToCapturarCalificaciones($object, $params) {
		return sprintf('<a href="%s">Capturar Calificaciones</a>', url_for('@lista_capturar?id=' . $object->getId()));
	}
        public function linkToCerrarLista($object, $params) {
		return sprintf('<a href="%s">Cerrar</a>', url_for('@lista_cerrar?id=' . $object->getId()));
	}
}
