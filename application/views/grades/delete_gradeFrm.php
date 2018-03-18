<h2>Delete a Grade</h2>
<p>Do you want to delete this Grade:</p>
<table class="table table-bordered table-condensed">
  <tr><td width="50">Student Id</td><td width="50"> <?php echo $chosen_grade[0]['idStudent']; ?> </td></tr>
  <tr><td>Student First Name</td><td> <?php echo $chosen_grade[0]['firstname']; ?> </td></tr>
  <tr><td>Student Last Name</td><td> <?php echo $chosen_grade[0]['lastname']; ?> </td></tr>
  <tr><td width="50">Course Id</td><td width="50"> <?php echo $chosen_grade[0]['idCourse']; ?> </td></tr>
  <tr><td>Course Name</td><td> <?php echo $chosen_grade[0]['CourseName']; ?> </td></tr>
  <tr><td>Etc Points</td><td> <?php echo $chosen_grade[0]['ectPoints']; ?> </td></tr>
</table>
<a href="<?php echo site_url('Grades_ctl/delete_grade/') . $idGrades."/".$chosen_grade[0]['idStudent']; ?>"> <button class="btn btn-danger" >Delete</button></a>
<a href="<?php echo site_url('Grades_ctl/show_student_grade/').$chosen_grade[0]['idStudent']; ?>"> <button class="btn btn-primary">Cancel</button></a>
