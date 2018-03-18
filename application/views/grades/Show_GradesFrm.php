<h2>Student Grades</h2>
<div "margin-bottom: 10px">
<form class="" action="<?php echo site_url('Grades_ctl/add_grade_to_db'); ?>" method="post">
<input type="hidden" name="idStudent" value="<?php echo $idStudent; ?>">
<label for="">Student First Name: <?php echo $student_data[0]['firstname'];?></label>
<br>
<label for="">Student Last Name: <?php echo $student_data[0]['lastname'];?></label>
<br>

<label for="">Add This Course to student</label>
<select class="" name="idCourse">
    <?php
    foreach ($free_courses as $row) {
      echo '<option value="'.$row['idCourse'].'">'.$row['CourseName'].'</option>';
    }
    ?>
  </select>
  <input class="btn btn-primary" type="submit" name="std_btn_submit_Grd" value="Add It">
  <br>
</div>
</form>
<br>
<br>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>Course Id</th><th>Course Name</th><th>Etc Points</th><th>Grade</th><th>Date Graded</th><th>Delete</th><th>Edit</th>
<?php
foreach ($chosen_grade as $row) {
    echo '<tr>';
    echo '<td>' . $row['idCourse'] . '</td>';
    echo '<td>' . $row['CourseName'] . '</td>';
    echo '<td>' . $row['ectPoints'] . '</td>';
    echo '<td>' . $row['arvosana'] . '</td>';
    echo '<td>' . $row['Date_of_grade'] . '</td>';
    echo '<td> <a href="' . site_url('Grades_ctl/show_before_delete/')
            . $row['idGrades'] . '"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>';
    echo '<td> <a href="' . site_url('Grades_ctl/show_for_edit_grade/')
        . $row['idGrades'] . '"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></button></a></td>';
    echo '</tr>';
}
?>
</tr>
</table>


