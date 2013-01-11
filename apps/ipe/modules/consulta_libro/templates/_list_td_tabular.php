<td class="sf_admin_text sf_admin_list_td_clasificacion">
  <?php echo $Libro->getClasificacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titulo">
  <?php echo $Libro->getTitulo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombrecompleto">
  <?php echo $Libro->getNombrecompleto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_dewey">
  <?php echo $Libro->getDewey()?>
</td>
<td class="sf_admin_text sf_admin_list_td_dewey">
  <?php echo $Libro->getNumeroDewey()?>
</td>
<td class="sf_admin_text sf_admin_list_td_ano_publicacion">
  <?php echo $Libro->getAnoPublicacion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isbn">
  <?php echo $Libro->getIsbn() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_editorial">
  <?php echo $Libro->getEditorial() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_herejia">
  <?php echo get_partial('consulta_libro/list_field_boolean', array('value' => $Libro->getHerejia())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tema_primario">
  <?php echo $Libro->getTemaPrimario() ?>
</td>
