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
    $c->add(CursoPeer::ESTADO, true, Criteria::EQUAL);

    $c->addDescendingOrderByColumn(CursoPeer::ANNO);
    $this->listas = ListaPeer::doSelect($c);

    $a = new Criteria;
    $a->add(AlumnoPeer::NUMERO_CONTROL, $this->getUser()->getUsername(), Criteria::EQUAL);
    $this->alumno = AlumnoPeer::doSelectOne($a);

  }

public function executeImprimirHorario(sfWebRequest $request) {

        try {
    $this->alumno = $this->getRoute()->getObject();
    $c = new Criteria;
    $c->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
    $c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID, Criteria::JOIN);
    $c->add(AlumnoPeer::NUMERO_CONTROL, $this->getUser()->getUsername(), Criteria::EQUAL);
    $c->add(CursoPeer::ANNO, date('Y', time()), Criteria::EQUAL);
    $c->add(CursoPeer::ESTADO, true, Criteria::EQUAL);


    $this->listasa = ListaPeer::doSelect($c);

        } catch (sfError404Exception $e) {

            $this->getUser()->setFlash('error', "El horario buscado no existe o no te corresponde.");
            $this->redirect('@alumno_alumno_lista');

        }
        $content = $this->getPartial('horario');
        $lista = new IPE_06($content);
        $lista->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }
  
public function executeImprimirKardex(sfWebRequest $request) {

        try {
    $this->alumno = $this->getRoute()->getObject();
    $c = new Criteria;
    $c->addJoin(ListaPeer::ID_ALUMNO, AlumnoPeer::ID, Criteria::JOIN);
    $c->addJoin(ListaPeer::ID_CURSO, CursoPeer::ID, Criteria::JOIN);
    $c->add(AlumnoPeer::NUMERO_CONTROL, $this->getUser()->getUsername(), Criteria::EQUAL);
    
    $c->addDescendingOrderByColumn(CursoPeer::ANNO);

    $this->listasa = ListaPeer::doSelect($c);

        } catch (sfError404Exception $e) {

            $this->getUser()->setFlash('error', "El horario buscado no existe o no te corresponde.");
            $this->redirect('@alumno_alumno_lista');

        }
        $content = $this->getPartial('kardex');
        $lista = new IPE_07($content);
        $lista->doPDF();

        $this->setLayout(false);
        return sfView::NONE;
    }
  }