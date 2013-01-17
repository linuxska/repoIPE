<?php

/**
 * lista_alumno actions.
 *
 * @package    ipe
 * @subpackage lista_alumno
 * @author     Abraham Rafael Rico Moreno
 */
class lista_alumnoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria;
    $c->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
    $c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID, Criteria::JOIN);
    $c->add(AlumnoPeer::NUMERO_CONTROL, $this->getUser()->getUsername(), Criteria::EQUAL);
    $c->add(CursoPeer::ANNO, date('Y', time()), Criteria::EQUAL);
    
    $c->addDescendingOrderByColumn(CursoPeer::ANNO);

    $this->listas = ListaPeer::doSelect($c);
  }

}
