<?php use_helper('I18N', 'Date') ?>
<?php include_partial('horario_alumno/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Horario alumno List', array(), 'messages') ?></h1>

  <?php include_partial('horario_alumno/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('horario_alumno/list_header', array('pager' => $pager)) ?>
  </div>

  
  <div id="sf_admin_content">
    <form action="<?php echo url_for('alumno_horario_alumno_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('horario_alumno/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('horario_alumno/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('horario_alumno/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('horario_alumno/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
