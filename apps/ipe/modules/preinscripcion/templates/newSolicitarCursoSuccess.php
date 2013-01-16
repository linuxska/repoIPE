<?php use_stylesheet('preinscripcion.css') ?>

<?php slot('title', 'ITC :: DGTYV :: CI :: Captura de datos') ?>

<h1>Reinscripción</h1>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('@preinscripcion_createSolicitarCurso') ?>" method="post">
    <?php if ($form->hasGlobalErrors()) : ?>
        <div class="error"><?php echo $form->renderGlobalErrors() ?></div>
    <?php endif; ?>
    
<table>
	
            <tr>
                <th><?php echo $form['no_control']->renderLabel(); ?></th>
                <td class="widget" id="widget">
                    <span class="error"><?php echo $form['no_control']->renderError() ?></span>
                    <?php echo $form['no_control']->render() ?>
                    <span class="help"><?php echo $form['no_control']->renderHelp() ?></span>
                </td>
            </tr>

</table>

<table class="tabla">
	<thead>
        <tr>
                <th>
                 <?php echo $form['cursos_solicitados']->renderLabel(); ?>
                </th>
		<th>
		Periodo
                </th>
		<th>
		Curso
                </th>
		<th>
		Hora
                </th>
        </tr>
	</thead>
	<tbody>
	<tr>
		<th>
		<?php echo $form['cursos_solicitados']['curso_1']->renderLabel(); ?> 
		<span class="help"><?php echo $form['cursos_solicitados']['curso_1']->renderHelp() ?></span>
		</th>

		<th>
                 <?php echo $form['cursos_solicitados']['curso_1']['id_periodo']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_1']['id_periodo']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_1']['id_nivel']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_1']['id_nivel']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_1']['hora']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_1']['hora']->renderHelp() ?></span>
		</th>
        </tr>
	<tr>
		<th>
		<?php echo $form['cursos_solicitados']['curso_2']->renderLabel(); ?> 
		<span class="help"><?php echo $form['cursos_solicitados']['curso_2']->renderHelp() ?></span>
		</th>

		<th>
                <?php echo $form['cursos_solicitados']['curso_2']['id_periodo']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_2']['id_periodo']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_2']['id_nivel']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_2']['id_nivel']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_2']['hora']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_2']['hora']->renderHelp() ?></span>
		</th>
	</tr>

	<tr>
		<th>
		<?php echo $form['cursos_solicitados']['curso_3']->renderLabel(); ?> </b>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_3']->renderHelp() ?></span>
		</th>

		<th>
                <?php echo $form['cursos_solicitados']['curso_3']['id_periodo']->render() ?>
                <span class="help"><?php echo $form['cursos_solicitados']['curso_3']['id_periodo']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_3']['id_nivel']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_3']['id_nivel']->renderHelp() ?></span>
		</th>

		<th>
		<?php echo $form['cursos_solicitados']['curso_3']['hora']->render() ?>
		<span class="help"><?php echo $form['cursos_solicitados']['curso_3']['hora']->renderHelp() ?></span>
		</th>
	</tr>   
</tbody>      
</table>
</form>
<div align="right">
        
                    <img src = "/sfPropelPlugin/images/default.png"/><a href="<?php echo url_for('@preinscripcion_index')?>">Volver</a>&nbsp;
                    <input type="submit" value="Guardar" />
       
</div>
