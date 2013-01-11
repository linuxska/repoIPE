<?php

/**
 * CompraTienda form.
 *
 * @package    ipe
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class CompraTiendaForm extends BaseCompraTiendaForm
{
  public function configure()
  {

  }

  public function doSave($con = null)
{
    // retrieve the object from the DB or create it
    $idproducto = $this->getValue('id_producto');
    $producto = ProductoTiendaPeer::retrieveByPK($idproducto);

    // overwrite the field value and let the form do the real work
    //var_dump($producto); die();
    $producto->setCantidad($this->getValue('cantidad'));
    //parent::doSave($con);
}
}
