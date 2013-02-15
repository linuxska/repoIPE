<?php

/**
 * salon module helper.
 *
 * @package    ipe
 * @subpackage salon
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class salonGeneratorHelper extends BaseSalonGeneratorHelper
{
	public function linkToImprimirHorario($object, $params) {
        return sprintf('<a href="%s">Imprimir Horario de Salon </a>', url_for('@salon_imprimir_horario?id=' . $object->getId()));
    }
}
