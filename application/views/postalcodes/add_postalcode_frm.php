<h2>Add a Postal Code</h2>
<form class="" action="<?php echo site_url('Postalcode_ctl/add_postalcode_to_db'); ?>" method="post">
  <label for="">Postal Code</label> <br>
  <input type="number" name="PostalCode" value=""> <br>

  <label for="">Post Place</label><br>
  <input type="text" name="postPlace" value=""><br>
  

  <br>
  <br>
  
  <input class="btn btn-primary" type="submit" name="std_btn_submit_Pst" value="Add">
  <input class="btn btn-danger" type="submit" name="std_btn_Cancel_Pst" value="Cancel">
  
</form>
