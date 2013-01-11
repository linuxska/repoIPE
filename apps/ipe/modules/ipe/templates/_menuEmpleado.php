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
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Vendedor de Tienda</li>
                <li class="app <?php echo in_array('ventas', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@ventas') ?>" class="alternate">Ventas</a></li>
            </ul>
    </li>
