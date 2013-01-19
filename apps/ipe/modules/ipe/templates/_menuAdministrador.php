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
    </ul>
    </li>
   <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Ebenener [ingles]</a></li>
                <li class="app <?php echo in_array('book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@book') ?>" class="alternate">Catálogo de libros (ingles)</a></li>
                <li class="app <?php echo in_array('integer', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@integer') ?>" class="alternate">Categorias Dewey (ingles)</a></li>
                <li class="app last <?php echo in_array('decimalen', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@decimalen') ?>" class="alternate">Subcategorias (ingles)</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Hno. Wokaty</li>
                <li class="app last <?php echo in_array('wk_book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@wk_book') ?>" class="alternate">Catálogo de libros Hno. Wokaty</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Ebenener</li>
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catálogo de libros</a></li>
                <li class="app <?php echo in_array('entero', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@entero') ?>" class="alternate">Categorias Dewey</a></li>
                <li class="app <?php echo in_array('decimal', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@decimal') ?>" class="alternate">Subcategorias</a></li>
            </ul>
    </li>