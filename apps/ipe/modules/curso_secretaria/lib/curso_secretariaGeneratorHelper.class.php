<?php

/**
 * curso_secretaria module helper.
 *
 * @package    ipe
 * @subpackage curso_secretaria
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */

class curso_secretariaGeneratorHelper extends BaseCurso_secretariaGeneratorHelper {

    public function linkToImprimirLista($object, $params) {
        return sprintf('<a href="%s">Imprimir</a>', url_for('@curso_imprimir_lista?id=' . $object->getId()));
    }

    public function linkToVerLista($object, $params) {
        return sprintf('<a href="%s">Ver</a>', url_for('@lista?id=' . $object->getId()));
    }
    
    public function linkToCapturarCalificaciones($object, $params) {
        return sprintf('<a href="%s">Capturar Calificaciones</a>', url_for('@lista_capturar?id=' . $object->getId()));
    }
}
