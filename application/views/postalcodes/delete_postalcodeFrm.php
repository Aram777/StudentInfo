<h2>Delete a Postal Code</h2>
<p>Do you want to delete this Postal Code:</p>
<table class="table table-bordered table-condensed">
  <tr><td width="50">Postal Code</td><td width="50"> <?php echo $chosen_postalcode[0]['PostalCode']; ?> </td></tr>
  <tr><td>Post Place</td><td> <?php echo $chosen_postalcode[0]['postPlace']; ?> </td></tr>
</table>
<a href="<?php echo site_url('Postalcode_ctl/delete_postalcode/') . $PostalCode; ?>"> <button class="btn btn-danger" >Delete</button></a>
<a href="<?php echo site_url('Postalcode_ctl/show_postalcodes'); ?>"> <button class="btn btn-primary">Cancel</button></a>
