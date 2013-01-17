<?php

require_once dirname(__FILE__).'/../lib/alumnoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/alumnoGeneratorHelper.class.php';

/**
 * alumno actions.
 *
 * @package    ipe
 * @subpackage alumno
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class alumnoActions extends autoAlumnoActions
{
	public function executeNew(sfWebRequest $request) {
    	throw new sfError404Exception();
    }

    public function executeCreate(sfWebRequest $request) {
    	throw new sfError404Exception();
    }

     public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();
        //var_dump($this->getRoute()->getObject()); die();
        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        if (ListaPeer::doCount(ListaPeer::getListasForAlumnoCriteria($this->getRoute()->getObject()))) {
            $this->getUser()->setFlash('error', 'El elemento no ha sido borrado debido a que tiene listas asociadas.');

            $this->redirect('@alumno');
        }

        $this->getRoute()->getObject()->delete();

        $this->getUser()->setFlash('notice', 'El elemento ha sido borrado.');

        $this->redirect('@alumno');
    }
    public function executeEliminarPreinscritos(sfWebRequest $request) {
        $affected_rows = AlumnoPeer::doSelect(AlumnoPeer::getAlumnosPreinscritosCriteria());

        $deleted = 0;
        foreach ($affected_rows as $obj) :
            if (ListaPeer::doCount(ListaPeer::getListasForAlumnoCriteria($obj))) {
                $this->getUser()->setFlash('error', "El elemento \"{$obj}\" no ha sido borrado debido a que tiene listas asociadas.\nEsto no debería suceder, contacte a su administrador.");
                $this->logMessage("¡¡(object) {$obj->getId()} se encuentra inscrito y sin número de control.!!", 'warning');
                continue;
            }

            $obj->delete();
            $deleted++;
        endforeach;

        $this->getUser()->setFlash('notice', "$deleted alumnos preinscritos eliminados.");

        $this->redirect('@alumno');
    }
}
