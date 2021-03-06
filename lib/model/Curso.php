<?php


/**
 * Skeleton subclass for representing a row from the 'curso' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Oct 12 19:02:41 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Curso extends BaseCurso {

	public function __toString() {
        $materia = MateriaPeer::retrieveByPK($this->getIdMateria());
        //$full = $this->isFull() ? '[LLENO]' : '';
        $nombre_corto = $this->getPeriodo()->getNombreCorto();

        return sprintf("%s   %s", $materia, $this->getProfesor());
    }
     public function getInscritos() {
        return count($this->getListas());
    }
     public function isFull() {
        return false;
        //return (count($this->getListas()) >= sfConfig::get('app_max_per_course')) ? true : false;
    }
    public function getSalonLunes() {
        $salon = SalonPeer::retrieveByPK($this->getIdSalonLunes());
        return sprintf("%s", $salon);
    }
    public function getSalonMartes() {
        $salon = SalonPeer::retrieveByPK($this->getIdSalonMartes());
        return sprintf("%s", $salon);
    }
    public function getSalonMiercoles() {
        $salon = SalonPeer::retrieveByPK($this->getIdSalonMiercoles());
        return sprintf("%s", $salon);
    }
    public function getSalonJueves() {
        $salon = SalonPeer::retrieveByPK($this->getIdSalonJueves());
        return sprintf("%s", $salon);
    }
    public function getSalonViernes() {
        $salon = SalonPeer::retrieveByPK($this->getIdSalonViernes());
        return sprintf("%s", $salon);
    }

} // Curso
