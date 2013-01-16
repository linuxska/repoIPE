<?php
/*
 * Menú de acciones para el actor Secretaria del IPE.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
    <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Inscripciones</a></li>
                <li class="app <?php echo in_array('registro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@preinscripcion_secretaria_registro_new') ?>" class="alternate">Registrar</a></li>
                <li class="app <?php echo in_array('inscribir', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@preinscripcion_secretaria_inscribir_new') ?>" class="alternate">Inscribir</a></li>
                <li class="app last <?php echo in_array('reinscribir', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@preinscripcion_secretaria_reinscribir_new') ?>" class="alternate">Asignar Materias</a></li>
            </ul>
        </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca I.P.E. [ingles]</li>
                <li class="app last<?php echo in_array('book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@book') ?>" class="alternate">Book Stock</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Hno Wokaty</li>
                <li class="app last <?php echo in_array('wk_book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@wk_book') ?>" class="alternate">Catalogo de libros Hno Wokaty</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca I.P.E.</li>
                <li class="app last <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catalogo de libros IPE</a></li>    
            </ul>
    </li>

    <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Catálogos</a></li>
                <li class="app <?php echo in_array('curso_secretaria', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@curso') ?>" class="alternate">Cursos</a></li>
                <li class="app <?php echo in_array('lista', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@lista') ?>" class="alternate">Lista</a></li>
                <li class="app <?php echo in_array('alumno', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@alumno') ?>" class="alternate">Alumno</a></li>
            </ul>
        </li>

