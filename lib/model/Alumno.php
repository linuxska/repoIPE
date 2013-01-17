<?php


/**
 * Skeleton subclass for representing a row from the 'alumno' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Oct 12 19:02:40 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Alumno extends BaseAlumno {
const ID_GRUPO_ALUMNO=5;
    
    private $__lista;
    
    public function __toString() {
        return ucwords(sprintf("%s %s %s", $this->getNombre(), $this->getAPaterno(), $this->getAMaterno()));
    }
    
    public function __toString2() {
        return ucwords(sprintf("%s %s %s", $this->getAPaterno(), $this->getAMaterno(), $this->getNombre()));
    }
     public function __alumnoName(){
        return ucwords(sprintf("%s %s %s", $this->getAPaterno(), $this->getAMaterno(), $this->getNombre()));
    }
    
    public function __getLista(){
        return $this->__lista;
    }
    
    public function __setLista($obj) {
        $this->__lista = $obj;
    }
     public static function sortAlumnos($obj1, $obj2) {
        $name1 = strtolower(sprintf("%s %s %s", $obj1->getAPaterno(), $obj1->getAMaterno(), $obj1->getNombre()));
        $name2 = strtolower(sprintf("%s %s %s", $obj2->getAPaterno(), $obj2->getAMaterno(), $obj2->getNombre()));
    
        $name1 = str_replace(
            array('á','é','í','ó','ú','Á','É','Í','Ó','Ú'), 
            array('a','e','i','o','u','A','E','I','O','U'), $name1);
        $name2 = str_replace(
            array('á','é','í','ó','ú','Á','É','Í','Ó','Ú'), 
            array('a','e','i','o','u','A','E','I','O','U'), $name2);
        
        return strcmp($name1, $name2);
    }
    protected function doSave(PropelPDO $con) {
        if ($this->getNumeroControl() && !AlumnoPeer::getSfGuardUser($this)):
    	    $password = sfGuardUserPeer::doMakePassword($this->getNumeroControl());

            $sf_guard_user = new sfGuardUser;
            $sf_guard_user->setUsername($this->getNumeroControl());
            $sf_guard_user->setPassword($this->getNumeroControl());
            $sf_guard_user->save();

            $sf_user_group = new sfGuardUserGroup;
            $sf_user_group->setUserId($sf_guard_user->getId());
            $sf_user_group->setGroupId(self::ID_GRUPO_ALUMNO);
            $sf_user_group->save();

           // SendMail::sendPasswordForAlumnoMail($this, $password);	
	endif;
        parent::doSave($con);
    }
} // Alumno
