<?php


/**
 * Skeleton subclass for performing query and update operations on the 'curso' table.
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
class CursoPeer extends BaseCursoPeer {

    static public function getCurrentCoursesCriteria() {
        $c = new Criteria();

        
        $c->addJoin(MateriaPeer::ID, CursoPeer::ID_MATERIA);
        $c->add(self::ANNO, date('Y', time()), Criteria::GREATER_EQUAL);

        //$c->add(self::ID_PERIODO, self::currentPeriods(), Criteria::IN);
        
        $c->addAscendingOrderByColumn(MateriaPeer::NOMBRE);
        $c->addAscendingOrderByColumn(CursoPeer::HORA_INICIO);
        $c->addAscendingOrderByColumn(CursoPeer::HORA_FINAL);

        return $c;
    }
    
    static private function currentPeriods() {
        $periods = array(13, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        $month = date('m', time());
        
        switch ($month) {
            case 1:
                $periods = array_merge(array(9, 10, 1, 3, 11), $periods);
            case 2:
                $periods = array_merge(array(1, 3, 11), $periods);
                break;
            case 3:
            case 4:
                $periods = array_merge(array(4), $periods);
                break;
            case 5:
            case 6:
                $periods = array_merge(array(7, 8), $periods);
                break;
            case 7:
            case 8:
                $periods = array_merge(array(5, 2, 12), $periods);
                break;
            case 9:
            case 10:
                $periods = array_merge(array(6), $periods);
                break;
            case 11:
            case 12:
                $periods = array_merge(array(9, 10), $periods);
                break;
       }
        
        return $periods;
    }
    
    static public function currentPeriodsStudent() {
        $periods = array(13);
        $month = date('m', time());
        
        switch ($month) {
            case 1:
                $periods = array_merge(array(2, 6, 12), $periods);
            case 2:
                $periods = array_merge(array(9, 10), $periods);
                break;
            case 3:
            case 4:
                $periods = array_merge(array(3), $periods);
                break;
            case 5:
            case 6:
                $periods = array_merge(array(1, 4), $periods);
                break;
            case 7:
            case 8:
                $periods = array_merge(array(1, 4, 7, 8, 11), $periods);
                break;
            case 9:
            case 10:
                $periods = array_merge(array(5), $periods);
                break;
            case 11:
            case 12:
                $periods = array_merge(array(2, 6, 12), $periods);
                break;
       }
        
        return $periods;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se han ofrecido del nivel especificado.
     *
     * @param Nivel $obj El nivel del cual se desean saber los cursos que se han ofrecido.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForNivelCriteria(Nivel $obj) {
        $c = new Criteria;

        $c->add(self::ID_NIVEL, $obj->getId(), Criteria::EQUAL);

        return $c;
    }

    /**
     * Devuelve un objecto criteria con los cursos que ha ofrecido el profesor especificado.
     *
     * @param Profesor $obj El profesor del cual se desean saber los cursos que ha impartido.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForProfesorCriteria(Profesor $obj) {
        $c = new Criteria;

        $c->add(self::ID_PROFESOR, $obj->getId(), Criteria::EQUAL);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se ofrecen en el periodo especificado.
     *
     * @param Periodo $obj El Periodo del cual se desean saber los cursos que se impartieron.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForPeriodoCriteria(Periodo $obj) {
        $c = new Criteria;

        $c->add(self::ID_PERIODO, $obj->getId(), Criteria::EQUAL);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se ofrecen en el salón especificado.
     *
     * @param Salon $obj El salón del cual se desean saber los cursos que ahí se
     * imparten.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForSalonCriteria(Salon $obj) {
        $c = new Criteria;

        $c->add(self::ID_SALON, $obj->getId(), Criteria::EQUAL);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se ofrecen en el año especificado.
     *
     * @param string $anno Formato YYYY
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForAnnoCriteria($anno) {
        $c = new Criteria;

        $c->add(self::ANNO, $anno, Criteria::EQUAL);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se ofrecen en el rango de
     * tiempo especificado: [$hora_inicio, $hora_final] inclusive.
     *
     * @param string $hora_inicio Formato HH:MM
     * @param string $hora_final Formato HH:MM
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForTimeRangeCriteria($hora_inicio, $hora_final) {
        $c = new Criteria;

        $c->add(self::HORA_INICIO, $hora_inicio, Criteria::GREATER_EQUAL);
        $c->add(self::HORA_FINAL, $hora_final, Criteria::LESS_EQUAL);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se ofrecen en el periodo especificado
     * y en los periodos relacionados.
     *
     * Periodo Relacionado :: Los Periodos Relacionados de un periodo son aquellos que ocurren
     * en el mismo tiempo que el periodo de referencia.
     *
     * p.ej.
     *  El periodo «ENERO - JUNIO» tiene dos periodos relacionados:
     *      «BIMESTRE 1»
     *      «BIMESTRE 2»
     *  El periodo «BIMESTRE 1» tiene un periodo relacionado.
     *      «ENERO - JUNIO»
     *
     *  El periodo «ENERO - JUNIO» *NO* tiene como periodo relacionado a:
     *      «ENERO - JUNIO SABATINO»
     *
     * La regla para saber si un periodo es un periodo relacionado a otro es.
     *
     *      'Que ambos periodos tengan al menos un día de clase en comun.'
     *
     * p.ej.
     *  Los periodos «ENERO - JUNIO» y «BIMESTRE 1» tienen en comun cinco días de clase.
     *
     *  Los Periodos «ENERO - JUNIO» y «ENERO - JUNIO SABATINO» no tienen al menos
     *  un día de clase en común.
     *
     * Esto sirve para calcular cruce de horarios y/o salones al momento de generar cursos.
     *
     * Nota: Esta propiedad es reflexiva.
     *
     * @param Periodo $obj El Periodo del cual se desean saber los cursos que se impartieron.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function getCursosForPeriodosRelacionadosCriteria(Periodo $obj) {
        $periodos_relacionados = PeriodoRelacionadoPeer::doSelect(PeriodoRelacionadoPeer::getPeriodosRelacionadosCriteria($obj));

        $keys = array();
        foreach($periodos_relacionados as $periodo_relacionado) :
            $keys[] = $periodo_relacionado->getIdPeriodoRelacionado();
        endforeach;

        $c = new Criteria;

        $c->add(self::ID_PERIODO, $keys, Criteria::IN);

        return $c;
    }

    /**
     *
     * @param Curso $obj
     * @return Criteria
     * @TODO Los métodos individuales ya funcionan falta comprobar si la unión de todos es la deacuada.
     */
    static private function getCruceCursosDefaultCriteria(Curso $obj) {
        $periodo = PeriodoPeer::retrieveByPK($obj->getIdPeriodo());

        $criterion_periodo = self::getCursosForPeriodoCriteria($periodo)->getCriterion(CursoPeer::ID_PERIODO);
        $criterion_anno = self::getCursosForAnnoCriteria($obj->getAnno())->getCriterion(CursoPeer::ANNO);
        $criterion_hora_inicio = self::getCursosForTimeRangeCriteria($obj->getHoraInicio(), $obj->getHoraFinal())->getCriterion(CursoPeer::HORA_INICIO);
        $criterion_hora_final = self::getCursosForTimeRangeCriteria($obj->getHoraInicio(), $obj->getHoraFinal())->getCriterion(CursoPeer::HORA_FINAL);

        $criterion_periodos_relacionados = self::getCursosForPeriodosRelacionadosCriteria($periodo)->getCriterion(CursoPeer::ID_PERIODO);

        $c = new Criteria;

        $c->add($criterion_periodo);
        $c->add($criterion_anno);
        $c->add($criterion_hora_inicio);
        $c->add($criterion_hora_final);
        
        $c->add($criterion_periodos_relacionados);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos en los que el profesor tiene cruce
     *
     * Si self::doCount(self::cruceProfesorCriteria($obj)) == 0, no hay cruce y todo bien.
     *
     * @param Curso $obj El Curso para el que estamos verificando que no tenga cruce.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function cruceProfesorCriteria(Curso $obj) {
        $c = self::getCruceCursosDefaultCriteria($obj);

        $profesor = ProfesorPeer::retrieveByPK($obj->getIdProfesor());

        $criterion_profesor = self::getCursosForProfesorCriteria($profesor)->getCriterion(CursoPeer::ID_PROFESOR);

        $c->add($criterion_profesor);

        return $c;
    }

    /**
     * Devuelve un objeto criteria con los cursos que se cruzan en ese salón.
     *
     * Si self::doCount(self::cruceSalonCriteria($obj)) == 0, no hay cruce y todo bien.
     *
     * @param Curso $obj El Curso para el que estamos verificando que no tenga cruce.
     * @return Criteria Una consulta que selecciona los cursos que cumplen la condición.
     */
    static public function cruceSalonCriteria(Curso $obj) {
        $c = self::getCruceCursosDefaultCriteria($obj);

        $salon = SalonPeer::retrieveByPK($obj->getIdSalon());

        $criterion_salon = self::getCursosForSalonCriteria($salon)->getCriterion(CursoPeer::ID_SALON);

        $c->add($criterion_salon);
        
        return $c;
    }

/******************************************************************************/
    static public function getCursosCriteria($year, $period) {
        $c = new Criteria;

        $c->add(self::ANNO, $year, Criteria::EQUAL);
        $c->add(self::ID_PERIODO, $period, Criteria::EQUAL);

        return $c;
    }

    static public function getCursosForAlumno(Alumno $alumno) {
        $c = new Criteria;

        $c->addJoin(self::ID, ListaPeer::ID_CURSO, Criteria::JOIN);
        $c->add(ListaPeer::ID_ALUMNO, $alumno->getId(), Criteria::EQUAL);
        
        return $c;
    }

    static public function getCurso(array $request) {
        return CursoPeer::retrieveByPK($request['id']);
    }


} // CursoPeer
