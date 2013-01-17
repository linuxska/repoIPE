<?php if (isset($curso)): ?>

<li class="sf_admin_action_cerrar">
  <?php $msj="'¿Esta seguro?'"; echo sprintf('<a onclick="if(!confirm(%s)){return false;};" href="%s">Cerrar</a>',$msj, url_for('@lista_cerrar?id=' . $curso->getId())); ?>
</li>
<?php endif; ?>