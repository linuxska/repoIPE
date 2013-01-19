<?php
/*
 * Menú de acciones para el actor Profesor del IPE.
 *profesor_profesor_profesor
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
 <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Ebenezer [ingles]</li>
                <li class="app last <?php echo in_array('book_consult_book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@book_consult_book') ?>" class="alternate">Catalogo de libros (ingles)</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Hno. Wokaty</li>
                <li class="app last <?php echo in_array('wk_book_consult_wkbook', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@wk_book_consult_wkbook') ?>" class="alternate">Catalogo de libros Hno. Wokaty</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca Ebenezer</li>
                <li class="app last <?php echo in_array('libro_consulta_libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro_consulta_libro') ?>" class="alternate">Catalogo de libros</a></li>
            </ul>
    </li>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Profesor</a></li>
                <li class="app  <?php echo in_array('profesor_profesor_profesor', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@profesor_profesor_profesor') ?>" class="alternate">Modificar datos</a></li>
                <li class="app  <?php echo in_array('curso_lista_profesor', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@curso_lista_profesor') ?>" class="alternate">Cursos</a></li>
            </ul>
    </li>