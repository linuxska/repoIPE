<?php use_stylesheet('preinscripcion.css') ?>

<?php slot('title', 'ITC :: DGTYV :: CI :: Preinscripción terminada.') ?>

<h1>Preinscripción Terminada.</h1>
<p>Gracias por participar.</p>
<p>Su aportación es valiosa, ya que ayudará a brindarle un mejor servicio y
    proporcionarle cursos de su interés.</p>
<p>De clic en el enlace <em>Terminar</em> para finalizar el proceso y volver el inicio.</p>

<p class="preinscripcion">
    <a href="<?php echo url_for('@preinscripcion_index') ?>">Terminar</a>
</p>