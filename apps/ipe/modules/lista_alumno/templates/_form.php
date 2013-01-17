<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('lista_alumno/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('lista_alumno/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'lista_alumno/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_alumno']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_alumno']->renderError() ?>
          <?php echo $form['id_alumno'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_curso']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_curso']->renderError() ?>
          <?php echo $form['id_curso'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_inscripcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_inscripcion']->renderError() ?>
          <?php echo $form['fecha_inscripcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['primera_calificacion_examen']->renderLabel() ?></th>
        <td>
          <?php echo $form['primera_calificacion_examen']->renderError() ?>
          <?php echo $form['primera_calificacion_examen'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['calificacion_parcial']->renderLabel() ?></th>
        <td>
          <?php echo $form['calificacion_parcial']->renderError() ?>
          <?php echo $form['calificacion_parcial'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['segunda_calificacion_examen']->renderLabel() ?></th>
        <td>
          <?php echo $form['segunda_calificacion_examen']->renderError() ?>
          <?php echo $form['segunda_calificacion_examen'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['calificacion_final']->renderLabel() ?></th>
        <td>
          <?php echo $form['calificacion_final']->renderError() ?>
          <?php echo $form['calificacion_final'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['aprobado']->renderLabel() ?></th>
        <td>
          <?php echo $form['aprobado']->renderError() ?>
          <?php echo $form['aprobado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['observaciones']->renderLabel() ?></th>
        <td>
          <?php echo $form['observaciones']->renderError() ?>
          <?php echo $form['observaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['inasistencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['inasistencia']->renderError() ?>
          <?php echo $form['inasistencia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['externo']->renderLabel() ?></th>
        <td>
          <?php echo $form['externo']->renderError() ?>
          <?php echo $form['externo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['recursando']->renderLabel() ?></th>
        <td>
          <?php echo $form['recursando']->renderError() ?>
          <?php echo $form['recursando'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
