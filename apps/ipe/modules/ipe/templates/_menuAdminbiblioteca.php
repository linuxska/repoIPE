<?php
/*
 * Menú de acciones para el actor Administrador de la Biblioteca o alumnos de beca.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
    
    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Biblioteca I.P.E. [ingles]</li>
                <li class="app <?php echo in_array('book', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@book') ?>" class="alternate">Book Stock</a></li>
                <li class="app <?php echo in_array('integer', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@integer') ?>" class="alternate">General Summary</a></li>
                <li class="app last <?php echo in_array('decimalen', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@decimalen') ?>" class="alternate">Decimales EN</a></li>
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
                <li class="app <?php echo in_array('libro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@libro') ?>" class="alternate">Catalogo de libros IPE</a></li>
                <li class="app <?php echo in_array('entero', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@entero') ?>" class="alternate">Numero General Dewey</a></li>
                <li class="app <?php echo in_array('decimal', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@decimal') ?>" class="alternate">Decimales Dewey</a></li>
            </ul>
    </li>        
       