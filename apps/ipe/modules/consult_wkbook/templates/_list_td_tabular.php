<td class="sf_admin_text sf_admin_list_td_Clasification">
  <?php echo $WkBook->getClasification()  ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $WkBook->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $WkBook->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_deweyen">
  <?php echo $WkBook->getDeweyen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_year">
  <?php echo $WkBook->getYear() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_publishing_house">
  <?php echo $WkBook->getPublishingHouse() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_heresy">
  <?php echo get_partial('consult_wkbook/list_field_boolean', array('value' => $WkBook->getHeresy())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isbn">
  <?php echo $WkBook->getIsbn() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_primary_subject">
  <?php echo $WkBook->getPrimarySubject() ?>
</td>
