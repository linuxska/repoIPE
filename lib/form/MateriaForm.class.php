<?php

/**
 * Materia form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class MateriaForm extends BaseMateriaForm
{
  public function configure()
  {
  		$this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['semestre']->setMessage('required', 'Requerido');
        $this->validatorSchema['clave']->setMessage('required', 'Requerido');

        $this->validatorSchema['clave']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');

  }
}
