<div id="sf_admin_container">
	<div id="sf_admin_header">
		<div id="sf_admin_content">
			<div class="sf_admin_list">
				<h1><?php echo $curso ?></h1>
				<form method="POST" action="<?php echo url_for('@lista_capturar_do?id='.$curso->getId())?>">
					<?php echo $form->renderGlobalErrors() ?>
					<table cellspacing= "0">
						<thead>   <tr >
							<th class="sf_admin_text sf_admin_list_th_idioma">No. Control</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Nombre de alumno</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Faltas</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Examen Bimestral</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Promedio Bimestral</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Examen Final</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Promedio Final</th>
							<th class="sf_admin_text sf_admin_list_th_idioma">Observaciones</th>
						    </tr> </thead>
						<tbody>
							<?php for($i = 0; $i < count($listas); $i++) : ?>
								<?php $lista = $form['lista_' . $i] ?>
								<tr>
									<td><?php echo $listas[$i]->getAlumno()->getNumeroControl() ?></td>
									<td><?php echo $listas[$i]->getAlumno()->__toString2() ?></td>
									<td>
										<?php echo $lista['inasistencia']->renderError(); ?>
										<?php echo $lista['inasistencia'] ?>
									</td>
									<td>
										<?php echo $lista['primera_calificacion_examen']->renderError(); ?>
										<?php echo $lista['primera_calificacion_examen'] ?>
									</td>
									<td>
										<?php echo $lista['calificacion_parcial']->renderError(); ?>
										<?php echo $lista['calificacion_parcial'] ?>
									</td>
									<td>
										<?php echo $lista['segunda_calificacion_examen']->renderError(); ?>
										<?php echo $lista['segunda_calificacion_examen'] ?>
									</td>
									<td>
										<?php echo $lista['calificacion_final']->renderError(); ?>
										<?php echo $lista['calificacion_final'] ?>
									</td>
									
									<td>
										<?php echo $lista['observaciones']->renderError(); ?>
										<?php echo $lista['observaciones'] ?>
									</td>
								</tr>
								
							<?php endfor; ?>
						</tbody>	
						<tfoot>
						
						</tfoot>
					</table>
					<?php echo $form->renderHiddenFields() ?>
					<ul class="sf_admin_actions">
						<li><a href="<?php echo url_for('@curso_lista_profesor') ?>">Volver</a></li>
						<li><input type="submit" value="Guardar" /></li>
     				        </ul>
				</form>
			</div>
		</div>
	</div>
</div>
