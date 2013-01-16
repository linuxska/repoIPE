<?php

class AlumnoSolicitarCursoForm extends sfForm {

    private $object = null;

    public function __construct($object = null, $options = array(), $CSRFSecret = null) {
        if (!$object) :
            $this->object = new Alumno;
        else :
            if (!($object instanceof Alumno)) :
                throw new sfException(sprintf('The "%s" form only accepts a "Alumno" object.', get_class($this)));
            endif;
        endif;

        parent::__construct(array(), $options, $CSRFSecret);
    }

    public function configure() {
        parent::configure();

        $this->setWidget('no_control', new sfWidgetFormInputText());
        $this->setValidator('no_control', new ValidatorSolicitarCursosAlumnoNoControl(
                        array('max_length' => 10, 'required' => true),
                        array('required' => 'Requerido.', 'max_length' => '%value% es muy grande (máximo %max_length% caracteres.).')
        ));

        $this->widgetSchema->setLabel('no_control', 'Número de control');
        $this->widgetSchema->setHelp('no_control', 'Tu número de control del Centro de Idiomas.');

        $form = new CursoSolicitadoCollectionForm(null, array('alumno' => new Alumno));
        $this->embedForm('cursos_solicitados', $form);

        $this->widgetSchema->setNameFormat('alumno[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    /**
     *
     * Nota: La clase sfForm no proporciona un método save(). Este método no sobreescribe nada.
     */
    public function save($con = null) {
        if (null === $con) {
            $con = $this->getConnection();
        }

        try {
            $con->beginTransaction();

            $this->doSave($con);

            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();

            throw $e;
        }
        return $this->object;
    }

    protected function doSave($con) {
        if (null === $con) {
            $con = $this->getConnection();
        }

        $this->updateObject();

        $this->saveEmbeddedForms($con);
    }

    public function updateObject($values = null) {
        if (null === $values) {
            $values = $this->values;
        }

        $no_control = $values['no_control'];
        $this->object = AlumnoPeer::doSelectOne(AlumnoPeer::getAlumnoByNoControlCriteria($no_control));

        return $this->object;
    }

    public function saveEmbeddedForms($con = null, $forms = null) {
        if (null === $con) :
            $con = $this->getConnection();
        endif;

        if (null === $forms) :
            $forms = $this->embeddedForms;
        endif;

        $cursos_solicitados = $this->getValue('cursos_solicitados');
        foreach ($this->embeddedForms['cursos_solicitados'] as $name => $form) :
            if (!isset($cursos_solicitados[$name])) :
                unset($forms['cursos_solicitados'][$name]);
            endif;
        endforeach;

        foreach ($forms as $form) :
            $_forms = $form->getEmbeddedForms();
            foreach ($_forms as $key => $form) :
                $cursos_solicitados = $this->getValue('cursos_solicitados');
                $form->updateObject($cursos_solicitados[$key]);
                $form->getObject()->setAlumno($this->object);
                $form->getObject()->save();
            endforeach;
        endforeach;
    }

    public function getConnection() {
        return Propel::getConnection(AlumnoPEER::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

}
