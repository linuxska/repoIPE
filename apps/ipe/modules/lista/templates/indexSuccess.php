<?php use_helper('I18N', 'Date') ?>
<?php include_partial('lista/assets') ?>

<div id="sf_admin_container">
  <?php if (isset($nombre_curso)) :?>
      <h1><?php echo $nombre_curso ?></h1>
  <?php endif; ?>

  <?php include_partial('lista/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('lista/list_header', array('pager' => $pager)) ?>
  </div>
      
      <?php if (!$sf_user->hasCredential('profesor')) : ?>
          <div id="sf_admin_bar">
              <?php include_partial('lista/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
          </div>
      <?php endif; ?>

  <div id="sf_admin_content">
    <?php include_partial('lista/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <li><a href="<?php echo url_for('@curso_lista_profesor') ?>">Volver</a></li>
      <?php include_partial('lista/list_batch_actions', array('helper' => $helper)) ?>
      <?php if(isset($curso)){ ?>
      <?php include_partial('lista/list_actions', array('helper' => $helper, 'curso' => $curso));  ?>
      <?php } else { ?>
      <?php include_partial('lista/list_actions', array('helper' => $helper)); } ?>
    </ul>

  </div>
  <div id="sf_admin_footer">
    <?php include_partial('lista/list_footer', array('pager' => $pager)) ?>
  </div>
</div>


<?php ?>