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

    <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Catálogo Secretaria</a></li>
                <li class="app <?php echo in_array('ca', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@curso_curso_secretaria') ?>" class="alternate">Cursos</a></li>
                <li class="app <?php echo in_array('lista', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@lista') ?>" class="alternate">Listas alumnos</a></li>
                <li class="app last <?php echo in_array('alumno', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@alumno') ?>" class="alternate">Alumnos</a></li>
            </ul>
    </li>
    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Catálogo Academico</a></li>
                <li class="app <?php echo in_array('curso', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@curso') ?>" class="alternate">Cursos</a></li>
                <li class="app <?php echo in_array('materia', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@materia') ?>" class="alternate">Materias</a></li>
                <li class="app <?php echo in_array('profesor', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@profesor') ?>" class="alternate">Profesores</a></li>
                <li class="app <?php echo in_array('periodo', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@periodo') ?>" class="alternate">Periodo</a></li>
                <li class="app <?php echo in_array('mes', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@mes') ?>" class="alternate">Meses</a></li>
                <li class="app <?php echo in_array('salon', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@salon') ?>" class="alternate">Salones</a></li>
            </ul>
    </li>
