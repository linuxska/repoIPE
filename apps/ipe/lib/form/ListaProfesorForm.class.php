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


                $this->validatorSchema['primera_calificacion_examen']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                $this->validatorSchema['primera_calificacion_examen']->setMessage('max', 'No puede ser mayor a 100.');
                $this->validatorSchema['calificacion_parcial']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                $this->validatorSchema['calificacion_parcial']->setMessage('max', 'No puede ser mayor a 100.');
                $this->validatorSchema['segunda_calificacion_examen']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                $this->validatorSchema['segunda_calificacion_examen']->setMessage('max', 'No puede ser mayor a 100.');
                $this->validatorSchema['calificacion_final']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                $this->validatorSchema['calificacion_final']->setMessage('max', 'No puede ser mayor a 100.');

                $this->validatorSchema['inasistencia']=new sfValidatorInteger(array('min' => 0, 'max' => 100));
                $this->widgetSchema['observaciones']->setAttribute('cols', 45);
                $this->widgetSchema['observaciones']->setAttribute('rows',  1);
                $this->validatorSchema['inasistencia']->setMessage('required', 'Este campo no debe dejarse en blanco.');

                $this->validatorSchema['primera_calificacion_examen']->setMessage('required', 'Este campo no debe dejarse en blanco.');
                $this->validatorSchema['calificacion_parcial']->setMessage('required', 'Este campo no debe dejarse en blanco.');
                $this->validatorSchema['segunda_calificacion_examen']->setMessage('required', 'Este campo no debe dejarse en blanco.');
                $this->validatorSchema['calificacion_final']->setMessage('required', 'Este campo no debe dejarse en blanco.');

                $this->validatorSchema['primera_calificacion_examen']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['calificacion_parcial']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['segunda_calificacion_examen']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['calificacion_final']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['inasistencia']->setMessage('min', 'Solo estan permitidos números positivos');
                $this->validatorSchema['inasistencia']->setMessage('max', 'No puede ser mayor a 100.');

                $this->validatorSchema['primera_calificacion_examen']->setMessage('invalid', '%value%" no es un número.');
                $this->validatorSchema['calificacion_parcial']->setMessage('invalid', '%value%" no es un número.');
                $this->validatorSchema['segunda_calificacion_examen']->setMessage('invalid', '%value%" no es un número.');
                $this->validatorSchema['calificacion_final']->setMessage('invalid', '%value%" no es un número.');
                $this->validatorSchema['inasistencia']->setMessage('invalid', '%value%" no es un número.');
        }
}
