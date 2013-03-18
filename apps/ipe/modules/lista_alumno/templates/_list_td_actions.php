<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_imprimirhorario">
      <?php echo link_to(__('Imprimir Horario', array(), 'messages'), 'lista_alumno/ListImprimirHorario?id='.$Alumno->getId(), array()) ?>
      <?php echo link_to(__('Imprimir Kardex', array(), 'messages'), 'lista_alumno/ListImprimirKardex?id='.$Alumno->getId(), array()) ?>
    </li>
  </ul>
</td>
