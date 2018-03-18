<h2>Students</h2>
<div "margin-bottom: 10px">
<form class="" action="<?php echo site_url('students_ctl/find_by_name'); ?>" method="post">
<label for="">Seacrch Students by First Name</label>
  <input type="text" name="student_name" value="">
  <input class="btn btn-primary" type="submit" name="" value="Find It">
  <br>
</div>
</form>
<a href="<?php echo site_url('Students_ctl/add_student_form'); ?>"> <button class="btn btn-primary">Add New Student</button></a>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>Student Id</th><th>First Name</th><th>Last Name</th><th>Group</th><th>Email</th><th>Address</th><th>Birth Year</th><th>Postal Code</th><th>Postal Place</th><th>Delete</th><th>Edit</th><th>Course</th>
<?php
foreach ($students as $row) {
    echo '<tr>';
    echo '<td>' . $row['idStudent'] . '</td>';
    echo '<td>' . $row['firstname'] . '</td>';
    echo '<td>' . $row['lastname'] . '</td>';
    echo '<td>' . $row['group'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['StreetAddress'] . '</td>';
    echo '<td>' . $row['birthYear'] . '</td>';
    echo '<td>' . $row['PostalCode'] . '</td>';
    echo '<td>' . $row['postPlace'] . '</td>';
    if ($row['crs'] == 1) {
        echo '<td> <a href="' . site_url('students_ctl/show_before_delete/')
            . $row['idStudent'] . '"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    } else {
        echo '<td> <a href="' . site_url('students_ctl/show_before_delete/')
            . $row['idStudent'] . '"><button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    }

    echo '<td> <a href="' . site_url('students_ctl/show_for_edit_student/')
        . $row['idStudent'] . '"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></button></a></td>';
    echo '<td> <a href="' . site_url('Grades_ctl/show_student_grade/')
        . $row['idStudent'] . '"><button class="btn btn-primary"  ><span class="glyphicon  glyphicon-education"></button></a></td>';
    echo '</tr>';
}
?>
</tr>
</table>


