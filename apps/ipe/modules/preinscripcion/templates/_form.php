<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


<form action="<?php echo url_for('@preinscripcion_create') ?>" method="post">
    <?php if ($form->hasGlobalErrors()) : ?>
        <div class="error"><?php echo $form->renderGlobalErrors() ?></div>
    <?php endif; ?>
    <table class="datosalumno">
	<td>  	
		<table class="data">
			<tbody>
	                    <tr>
                                <th><?php echo $form['nombre']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['nombre']->renderError() ?></span>
                                    <?php echo $form['nombre']->render() ?>
                                    <span class="help"><?php echo $form['nombre']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['a_paterno']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['a_paterno']->renderError() ?></span>
                                    <?php echo $form['a_paterno']->render() ?>
                                    <span class="help"><?php echo $form['a_paterno']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['a_materno']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['a_materno']->renderError() ?></span>
                                    <?php echo $form['a_materno']->render() ?>
                                    <span class="help"><?php echo $form['a_materno']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['direccion']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['direccion']->renderError() ?></span>
                                    <?php echo $form['direccion']->render() ?>
                                    <span class="help"><?php echo $form['direccion']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['colonia']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['colonia']->renderError() ?></span>
                                    <?php echo $form['colonia']->render() ?>
                                    <span class="help"><?php echo $form['colonia']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['ciudad']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['ciudad']->renderError() ?></span>
                                    <?php echo $form['ciudad']->render() ?>
                                    <span class="help"><?php echo $form['ciudad']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['estado']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['estado']->renderError() ?></span>
                                    <?php echo $form['estado']->render() ?>
                                    <span class="help"><?php echo $form['estado']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['cp']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['cp']->renderError() ?></span>
                                    <?php echo $form['cp']->render() ?>
                                    <span class="help"><?php echo $form['cp']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['sexo']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['sexo']->renderError() ?></span>
                                    <?php echo $form['sexo']->render() ?>
                                    <span class="help"><?php echo $form['sexo']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['fecha_nacimiento']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['fecha_nacimiento']->renderError() ?></span>
                                    <?php echo $form['fecha_nacimiento']->render() ?>
                                    <span class="help"><?php echo $form['fecha_nacimiento']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['telefono']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['telefono']->renderError() ?></span>
                                    <?php echo $form['telefono']->render() ?>
                                    <span class="help"><?php echo $form['telefono']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['e_mail']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['e_mail']->renderError() ?></span>
                                    <?php echo $form['e_mail']->render() ?>
                                    <span class="help"><?php echo $form['e_mail']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['instituto_empresa']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['instituto_empresa']->renderError() ?></span>
                                    <?php echo $form['instituto_empresa']->render() ?>
                                    <span class="help"><?php echo $form['instituto_empresa']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['id_medio']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['id_medio']->renderError() ?></span>
                                    <?php echo $form['id_medio']->render() ?>
                                    <span class="help"><?php echo $form['id_medio']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo $form['informacion']->renderLabel(); ?></th>
                                <td class="widget">
                                    <span class="error"><?php echo $form['informacion']->renderError() ?></span>
                                    <?php echo $form['informacion']->render() ?>
                                    <span class="help"><?php echo $form['informacion']->renderHelp() ?></span>
                                </td>
                            </tr>
			
			</tbody>
			</table>
                     </td>
   
	<td valign="top">
	<input type ="button" id ="bottom1" value ="Estudiante del ITC"></input>
	<input type ="button" id ="bottom2" value ="Trabajador del ITC"></input>
	
	     <table id = "cerrar" class="data" >
			<tbody>
                            <tr class = "interno" id ="interno">
                                <td class="widget">
                                    <!--<span class="error"><?php //echo $form['alumno_interno']->renderError() ?></span>-->
                                    <?php echo $form['alumno_interno']->render() ?>
                                    <span class="help"><?php echo $form['alumno_interno']->renderHelp() ?></span>
                                </td>
                            </tr>
                            <tr class="trabajador" id ="trabajador">                            
                                <td class="widget">
                                    <!--<span class="error"><?php //echo $form['trabajador_ITC']->renderError() ?></span>-->
                                    <?php echo $form['trabajador_ITC']->render() ?>
                                    <span class="help"><?php echo $form['trabajador_ITC']->renderHelp() ?></span>
                                </td>
                            </tr>
			</tbody>
		</table>
	</td>
</table>
<!-- -->
	<script type="text/javascript">
	$(document).ready(function(){
	$("#interno").hide();
	$("#trabajador").hide();
	});

	$("#bottom1").click(function () {
	$("#trabajador").hide("slow");
	$("#interno").show("slow");
	
	});
	$("#bottom2").click(function () {
	$("#interno").hide("slow");
	$("#trabajador").show("slow");
	
	});
	</script>  
      
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
        	    <?php echo $form->renderHiddenFields(false) ?>
		    <img src = "/sfPropelPlugin/images/default.png"/><a href="<?php echo url_for('@preinscripcion_index')?>">Volver</a>&nbsp;
                    <input type="submit" value="Guardar" />
</div>                 
