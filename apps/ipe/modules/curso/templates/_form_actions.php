<ul class="sf_admin_actions">
    <?php if ($form->isNew()): ?>
    <?php echo $helper->linkToSave($form->getObject(), array('label' => 'Guardar', 'params' => array(), 'class_suffix' => 'save',)) ?>
    <?php echo $helper->linkToSaveAndAdd($form->getObject(), array('label' => 'Guardar y Agregar otro', 'params' => array(), 'class_suffix' => 'save_and_add',)) ?>
    <?php echo $helper->linkToList(array('label' => 'Volver', 'params' => array(), 'class_suffix' => 'list',)) ?>
    <?php else: ?>
    <?php echo $helper->linkToSave($form->getObject(), array('label' => 'Guardar', 'params' => array(), 'class_suffix' => 'save',)) ?>
    <?php echo $helper->linkToDelete($form->getObject(), array('label' => 'Eliminar', 'params' => array(), 'confirm' => '¿Desea eliminar este elemento?', 'class_suffix' => 'delete',)) ?>
    <?php echo $helper->linkToList(array('label' => 'Volver', 'params' => array(), 'class_suffix' => 'list',)) ?>
    <?php endif; ?>
</ul>
