<?php

class CursoSolicitadoCollectionForm extends sfForm {

    public function configure() {
        if (!$alumno = $this->getOption('alumno')) :
            throw new InvalidArgumentException('Debe especificar un alumno.');
        endif;

        for ($i = 0; $i < $this->getOption('size', 3); $i++):
            $curso_solicitado = new CursoSolicitado;
            $curso_solicitado->setAlumno($alumno);

            $curso_solicitado_form = new CursoSolicitadoForm($curso_solicitado);

            $this->embedForm('curso_' . ($i + 1), $curso_solicitado_form);
        endfor;

        $this->mergePostValidator(new ValidatorCursosSolicitados());
    }

}
