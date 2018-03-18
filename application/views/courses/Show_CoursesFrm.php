<h2>Courses</h2>
<div "margin-bottom: 10px">
<form class="" action="<?php echo site_url('Course_ctl/find_by_name'); ?>" method="post">
<label for="">Seacrch Course by course Name</label>
  <input type="text" name="coursename" value="">
  <input class="btn btn-primary" type="submit" name="" value="Find It">
  <br>
</div>
</form>
<a href="<?php echo site_url('Course_ctl/add_course_form'); ?>"> <button class="btn btn-primary">Add New Course</button></a>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>Course Id</th><th>Course Name</th><th>Etc Points</th><th>Delete</th><th>Edit</th>
<?php
foreach ($courses as $row) {
    echo '<tr>';
    echo '<td>' . $row['idCourse'] . '</td>';
    echo '<td>' . $row['CourseName'] . '</td>';
    echo '<td>' . $row['ectPoints'] . '</td>';
    if ($row['grd'] == 1) {
        echo '<td> <a href="' . site_url('Course_ctl/show_before_delete/')
            . $row['idCourse'] . '"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    } else {
        echo '<td> <a href="' . site_url('Course_ctl/show_before_delete/')
            . $row['idCourse'] . '"><button class="btn btn-danger" disabled><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    }

    echo '<td> <a href="' . site_url('Course_ctl/show_for_edit_course/')
        . $row['idCourse'] . '"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></button></a></td>';
    echo '</tr>';
}
?>
</tr>
</table>


