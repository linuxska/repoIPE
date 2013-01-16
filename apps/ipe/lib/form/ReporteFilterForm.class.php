<?php

class ReporteFilterForm extends sfForm {

    private $reports = array(
        '0' => 'CSV Alumnos',
        '1' => 'Cursos',
        '2' => 'Alumnos',
        '3' => 'Ingresos',
        '4' => 'Alumnos Internos',
        '6' => 'Ingresos por grupo'
    );

    public function configure() {
        parent::configure();

        $this->setWidget('anno', new sfWidgetFormInputText(
                        array(
                            'default' => date('Y', time()),
                            'label' => 'Año'
                        )
        ));
        $this->setWidget('periodo', new sfWidgetFormPropelChoice(
                        array(
                            'model' => 'Periodo',
                            'add_empty' => false
                        )
        ));
        $this->setWidget('reporte', new sfWidgetFormChoice(
                    array(
                        'choices' => $this->reports
                    )
        ));

        $this->setValidator('anno', new sfValidatorInteger(
                        array(
                            'min' => 0,
                            'max' => 9999,
                            'required' => true
                        ),
                        array(
                            'required' => "Requerido",
                            'invalid' => '%value% no es un entero.',
                            'min' => '"%value%" debe ser almenos %min%.',
                            'max' => '"%value%" no debe ser mayor que %max%.'
                        )
        ));
        $this->setValidator('periodo', new sfValidatorPropelChoice(
                        array(
                            'model' => 'Periodo',
                            'column' => 'id'
                        )
        ));
        $this->setValidator('reporte', new sfValidatorChoice(
                array(
                    'choices' => array_keys($this->reports),
                    'required' => true
                ),
                array(
                    'invalid' => 'Inválido.',
                    'required' => 'Requerido.'
                )
        ));

        $this->widgetSchema->setNameFormat('reporte[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

}