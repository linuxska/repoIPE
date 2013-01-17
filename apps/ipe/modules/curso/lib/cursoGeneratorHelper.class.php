<?php

/**
 * curso module helper.
 *
 * @package    ipe
 * @subpackage curso
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class cursoGeneratorHelper extends BaseCursoGeneratorHelper
{
	 public function linkToImprimirLista($object, $params) {
        return sprintf('<a href="%s">ImprimirLista</a>', url_for('@curso_imprimir_lista?id=' . $object->getId()));
    }
}
