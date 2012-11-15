<td class="sf_admin_text sf_admin_list_td_Clasification">
  <?php echo $Book->getClasification() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $Book->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Book->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_deweyen">
  <?php echo $Book->getDeweyen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_year">
  <?php echo $Book->getYear() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_publishing_house">
  <?php echo $Book->getPublishingHouse() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_heresy">
  <?php echo get_partial('consult_book/list_field_boolean', array('value' => $Book->getHeresy())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isbn">
  <?php echo $Book->getIsbn() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_primary_subject">
  <?php echo $Book->getPrimarySubject() ?>
</td>
