<?php
/*
 * Si se desea agregar otro usuario al sistema -actor. Debe añadir su credencial correspondiente aquí.
 * 
 * Independientemente de la credencial, todo usuario tiene la opción de cerrar sesión.
 */
?>
<div id="menu" class="menus">
    <ul class="menu_list">
        <style type="text/css">
            li.nobk:hover{background-color: white !important;}
        </style>
        <li class="app nobk" style="border:1px black none;text-align:center;height:9px;"><span class="flip" style="padding-left:10px;padding-right:10px;background-color:#17608A;color:white;height:9px;" title="Ocultar menu">&Delta;</span></li>
        <?php
        if ($sf_user->hasCredential('admin')) {
            include_partial('ipe/menuAdmin');
        }
        if ($sf_user->hasCredential('director')) {
            include_partial('ipe/menuDirector');
        }
        if ($sf_user->hasCredential('secretaria')) {
            include_partial('ipe/menuSecretaria');
        }
        if ($sf_user->hasCredential('academico')) {
            include_partial('ipe/menuAcademico');
        }
        if ($sf_user->hasCredential('bibliotecaadmin')) {
            include_partial('ipe/menuAdminbiblioteca');
        }
        if ($sf_user->hasCredential('biblioteca')) {
            include_partial('ipe/menuBiblioteca');
        }
        if ($sf_user->hasCredential('profesor')) {
            include_partial('ipe/menuProfesor');
        }
        if ($sf_user->hasCredential('alumno')) {
            include_partial('ipe/menuAlumno');
        }
        ?>
        <li class="app <?php echo in_array('changepassword', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@change_password') ?>" class="alternate">Cambiar contraseña</a></li>
        <li class="app last"><a href="<?php echo url_for('sf_guard_signout') ?>" class="alternate">Salir [<span class="username"><?php echo $sf_user ?></span>]</a></li>
    </ul>
</div>
