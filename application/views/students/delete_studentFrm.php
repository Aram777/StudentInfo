<h2>Delete a Student</h2>
<p>Do you want to delete this student:</p>
<table class="table table-bordered table-condensed">
  <tr><td width="50">Student Id</td><td width="50"> <?php echo $chosen_student[0]['idStudent']; ?> </td></tr>
  <tr><td>First Name</td><td> <?php echo $chosen_student[0]['firstname']; ?> </td></tr>
  <tr><td>Last Name</td><td> <?php echo $chosen_student[0]['lastname']; ?> </td></tr>
  <tr><td>Group</td><td> <?php echo $chosen_student[0]['group']; ?> </td></tr>
</table>
<a href="<?php echo site_url('students_ctl/delete_student/') . $idStudent; ?>"> <button class="btn btn-danger" >Delete</button></a>
<a href="<?php echo site_url('students_ctl/show_students'); ?>"> <button class="btn btn-primary">Cancel</button></a>
