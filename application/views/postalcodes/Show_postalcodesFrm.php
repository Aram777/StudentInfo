<h2>Postal Codes</h2>
<div "margin-bottom: 10px">
<form class="" action="<?php echo site_url('Postalcode_ctl/find_by_name'); ?>" method="post">
<label for="">Seacrch Postal Code by place Name</label>
  <input type="text" name="postPlace" value="">
  <input class="btn btn-primary" type="submit" name="" value="Find It">
  <br>
</div>
</form>
<a href="<?php echo site_url('Postalcode_ctl/add_postalcode_form'); ?>"> <button class="btn btn-primary">Add New postal Code</button></a>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>Postal Code</th><th>Post Place</th><th>Delete</th><th>Edit</th>
<?php
foreach ($postalcodes as $row) {
    echo '<tr>';
    echo '<td>' . $row['PostalCode'] . '</td>';
    echo '<td>' . $row['postPlace'] . '</td>';
    if ($row['std'] == 1) {
        echo '<td> <a href="' . site_url('Postalcode_ctl/show_before_delete/')
            . $row['PostalCode'] . '"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    } else {
        echo '<td> <a href="' . site_url('Postalcode_ctl/show_before_delete/')
            . $row['PostalCode'] . '"><button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    }

    echo '<td> <a href="' . site_url('Postalcode_ctl/show_for_edit_postalcode/')
        . $row['PostalCode'] . '"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></button></a></td>';
    echo '</tr>';
}
?>
</tr>
</table>


