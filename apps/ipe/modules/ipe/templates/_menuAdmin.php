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
        <li class="menu_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Administrador</a></li>
        <li class="app <?php echo in_array('sf_guard_user', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_user') ?>" class="alternate">Usuarios</a></li>
        <li class="app <?php echo in_array('sf_guard_group', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_group') ?>" class="alternate">Grupos</a></li>
        <li class="app last <?php echo in_array('sf_guard_permission', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_permission') ?>" class="alternate">Permisos</a></li>
        
        <li class="menu_role">
        <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca I.P.E. [ingles]</li>
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Book Stock</a></li>
                <li class="app <?php echo in_array('primersumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@primersumario') ?>" class="alternate">General Summary</a></li>
                <li class="app last <?php echo in_array('segundosumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@segundosumario') ?>" class="alternate">Decimales</a></li>
        </ul>
        </li>
        
        <li class="menu_role">
        <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Hno Wokaty</li>
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catalogo de libros</a></li>
                <li class="app <?php echo in_array('primersumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@primersumario') ?>" class="alternate">General Summary</a></li>
                <li class="app last <?php echo in_array('segundosumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@segundosumario') ?>" class="alternate">Decimales</a></li>
        </ul>
        </li>
        
        <li class="menu_role">
        <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca I.P.E.</li>
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catalogo de libros</a></li>
                <li class="app <?php echo in_array('primersumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@primersumario') ?>" class="alternate">Indice General</a></li>
                <li class="app <?php echo in_array('segundosumario', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@segundosumario') ?>" class="alternate">Decimales</a></li>
        </ul>
        </li>
    </ul>
</li>