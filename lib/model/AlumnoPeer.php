<?php


/**
 * Skeleton subclass for performing query and update operations on the 'alumno' table.
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
class AlumnoPeer extends BaseAlumnoPeer {

 static public function getAlumnoByNumeroControlCriteria($numero_control) {
        
        $c = new Criteria;

        $c->add(self::NUMERO_CONTROL, $numero_control, Criteria::EQUAL);

        return $c;
    }
    
    static public function getSfGuardUser(Alumno $alumno){
        $c = new Criteria;
        
        $c->add(sfGuardUserPeer::USERNAME, $alumno->getNumeroControl(), Criteria::EQUAL);
        
        return sfGuardUserPeer::doSelectOne($c);
    }
    

    static public function getAlumnosPreinscritosCriteria() {
        $c = new Criteria;

        $c->add(self::NUMERO_CONTROL, NULL, Criteria::ISNULL);

        return $c;
    }

    static public function getNumeroControl($id_course, $conn) {
        $year =  date('Y', time());

        $folio = FolioControlPeer::getFolioByYear(date('Y', time()), $conn);

        return $year . sprintf("%04s", $folio);
    }

    
    static public function getAlumno(array $request) {

         return self::doSelectOne(self::getAlumnoByNumeroControlCriteria($request['numero_control']));

    }

} // AlumnoPeer
