<?php slot('title', 'Instituto Práctico Ebenezer Inscripción') ?>

<div id="sf_admin_container">
    <div class="sf_admin_form">
        <form action="<?php echo url_for('@preinscripcion_secretaria_reinscribir_create') ?>" method="post">
            <?php echo $form->renderHiddenFields(false) ?>

            <?php if ($form->hasGlobalErrors()): ?>
                <?php echo $form->renderGlobalErrors() ?>
            <?php endif; ?>

            <table>
                <tbody>
            <?php foreach($form as $field) : ?>
                    <?php if ($field->isHidden()): continue; endif;?>
                    <tr>
                        <th><?php echo $field->renderLabel(); ?></th>
                        <td class="widget">
                            <?php echo $field->renderError() ?>
                            <?php echo $field->render() ?>
                            <span class="help" style="font-weight: bolder"><?php echo $field->renderHelp() ?></span>
                        </td>
                    </tr>
            <?php endforeach; ?>
                </tbody>
            </table>

            <ul class="sf_admin_actions">
                <li><input type="submit" value="Guardar" /></li>
                <li><a href="<?php echo url_for('@homepage') ?>">Volver</a></li>
            </ul>
        </form>
    </div>
</div>
