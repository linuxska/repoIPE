<?php use_stylesheet('preinscripcion.css') ?>

<?php slot('title', 'ITC :: DGTYV :: CI :: Preinscripción terminada.') ?>

<h1>Preinscripción Terminada.</h1>
<p>Gracias por preinscribirte a los cursos del Centro de Idiomas.</p>
<p>A continuación le mostramos su clave de preinscripción, recuerde que la debe
    proporcionar en la oficina del Centro de Idiomas junto con los demás
    requisitos cuando realice su inscripción. <strong>No la olvide, si es necesario anótela.</strong>
</p>
<p>De clic en el enlace <em>Terminar</em> para finalizar el proceso y volver al
    inicio donde le mostraremos nuevamente los requisitos para terminar su inscripción
    y el número de cuenta donde debe realizar los pagos correspondientes.
</p>
<p class="datos">Clave de Preinscripción: <span><?php echo $alumno->getId() ?></span><br />
    <a href="<?php echo url_for('@preinscripcion_print_itc_dgtyv_ci_01') ?>">Descargar Cedula de Inscripción</a></p>
<p class="preinscripcion">
    <a href="<?php echo url_for('@preinscripcion_index') ?>">Terminar</a>    
</p>