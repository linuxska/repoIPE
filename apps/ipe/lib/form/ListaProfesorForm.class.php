<?php

class ListaProfesorForm extends ListaForm {

        public function configure() {
                unset(
                        $this['id_tipo_alumno'],
                        $this['aprobado'],
                        $this['recibo_pago'],
                        $this['id_documento_probatorio'],
                        $this['identificacion'],
                        $this['motivo_cambio'],
                        $this['curso_anterior'],
                        $this['prorroga'],
                        $this['folio_voucher'],
                        $this['beca'],
                        $this['fecha_inscripcion'],
                        $this['id_curso'],
                        $this['id_alumno']
                );

                if ($this->object->getCurso()->getNivel()->getId() == 63):
                        $this->validatorSchema['calificacion']=new sfValidatorInteger(array('min' => 0, 'max' => 677));
                        $this->validatorSchema['calificacion']->setMessage('max', 'No puede ser mayor a 677.');
                else:
                        $this->validatorSchema['calificacion']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                        $this->validatorSchema['calificacion']->setMessage('max', 'No puede ser mayor a 100.');
                endif;
                $this->validatorSchema['inasistencia']=new sfValidatorInteger(array('min' => 0, 'max' => 100));

                $this->widgetSchema['observaciones']->setAttribute('cols', 45);
                $this->widgetSchema['observaciones']->setAttribute('rows',  1);
                $this->validatorSchema['inasistencia']->setMessage('required', 'Este campo no debe dejarse en blanco.');
                $this->validatorSchema['calificacion']->setMessage('required', 'Este campo no debe dejarse en blanco.');

                $this->validatorSchema['calificacion']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['inasistencia']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['inasistencia']->setMessage('max', 'No puede ser mayor a 80.');

                $this->validatorSchema['calificacion']->setMessage('invalid', '%value%" no es un número.');
                $this->validatorSchema['inasistencia']->setMessage('invalid', '%value%" no es un número.');
        }
}
