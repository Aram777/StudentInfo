<h2>Edit a Postal Code</h2>
<form class="" action="<?php echo site_url('Postalcode_ctl/save_edited'); ?>" method="post">
<input type="hidden" name="PostalCode" value="<?php echo $chosen_postalcode[0]['PostalCode']; ?>">
<label for="">Postal Code</label><br>
  <input type="number" name="" value="<?php echo $PostalCode; ?>" disabled><br>
  <label for="">Post Place</label><br>
  <input type="text" name="postPlace" value="<?php echo $chosen_postalcode[0]['postPlace']; ?>"><br>


  <input class="btn btn-primary" type="submit" name="submit_pst_btn" value="Save">
  <a href="<?php echo site_url('Postalcode_ctl/show_postalcodes'); ?>"> <button class="btn btn-danger">Cancel</button></a>


</form>
