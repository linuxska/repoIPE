<p>Estimado(a) <strong><?php echo $persona ?></strong>.</p>

<p>A continuación le proporcionamos información general sobre el sistema.</p>

<p>Sus datos de acceso son:<br />
    <dl>
        <dt>Usuario</dt>
        <dd><?php echo $persona->getRfc() ?></dd>
        <dt>Contraseña</dt>
        <dd><i><?php echo $password ?></i></dd>
    </dl>    

    Puede ingresar al sistema en el enlace <a style='color:inherit;text-decoration:none;border-bottom:1px grey dotted;' href="http://www.sii-ipe.abricolabs.net/web/">Acceso al Sistema</a>.
</p>

<p>Si tiene alguna duda en lo relativo al procedimiento de Instituto Práctico Ebenezer puede contactar con <a href='mailto:<?php echo sfConfig::get('app_sf_guard_extra_plugin_mail_from') ?>' style='color:inherit;text-decoration:none;border-bottom:1px grey dotted;'><?php echo sfConfig::get('app_sf_guard_extra_plugin_name_from') ?></a>.</p>

<p>Si tiene algún problema técnico puede contactar con <a href='mailto:<?php echo sfConfig::get('app_sf_guard_extra_plugin_admin_mail_from') ?>' style='color:inherit;text-decoration:none;border-bottom:1px grey dotted;'><?php echo sfConfig::get('app_sf_guard_extra_plugin_admin_name_from')?></a>.</p>

<p>Por favor, conserve este correo electrónico para futuras referencias.</p>

<p>
Atentamente.<br />
<strong>Instituto Práctico Ebenezer.</strong><br />
<strong>Departamento de Sistemas.</strong><br />
</p>
