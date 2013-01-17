<div id="sf_admin_container">
<h1>Historico de calificaciones</h1>
<div id="sf_admin_header">
<div id="sf_admin_content">
<div class="sf_admin_list">
<table cellspacing= "0">
  <thead>
    <tr >
      <th class="sf_admin_text sf_admin_list_th_idioma">Año</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Periodo</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Nombre del Curso</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Nombre del Profesor</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Inasistencias</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">1er examen</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Primer parcial</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">2do examen</th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Calificaion Final </th>
      <th class="sf_admin_text sf_admin_list_th_idioma">Aprobado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listas as $lista): ?>
    <tr class = "sf_admin_row odd">
      <td sf_admin_row even><?php echo $lista->getCurso()->getAnno() ?></td>
      <td><?php echo $lista->getCurso()->getPeriodo() ?></td>      
      <td><?php echo $lista->getCurso()->getMateria() ?></td>
      <td><?php echo $lista->getCurso()->getProfesor() ?></td>
      <td><?php echo $lista->getInasistencia() ?></td>
      <td><?php echo $lista->getPrimeraCalificacionExamen() ?></td>
      <td><?php echo $lista->getCalificacionParcial() ?></td>
      <td><?php echo $lista->getSegundaCalificacionExamen() ?></td>
      <td><?php echo $lista->getCalificacionFinal() ?></td>
      <td class="sf_admin_boolean sf_admin_list_td_aprobado"><?php echo $lista->getAprobado() ? '<img alt="Checked" title="Checked" src="/sfPropelPlugin/images/tick.png"/>':""?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
