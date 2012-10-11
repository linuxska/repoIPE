<?php
/*
 * Menú de acciones para el actor admin.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
<li class="menu_role">
    <ul class="menu_sub">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Modulos</li>
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catalogo Libros</a></li>
                <li class="app <?php echo in_array('primersumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@primersumario') ?>" class="alternate">Dir. de Iglesias</a></li>
                <li class="app <?php echo in_array('segundosumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@segundosumario') ?>" class="alternate">Ministerios</a></li>
            </ul>
    </ul>
</li>