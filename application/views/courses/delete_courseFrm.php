<h2>Delete a Course</h2>
<p>Do you want to delete this Course:</p>
<table class="table table-bordered table-condensed">
  <tr><td width="50">Course Id</td><td width="50"> <?php echo $chosen_course[0]['idCourse']; ?> </td></tr>
  <tr><td>Course Name</td><td> <?php echo $chosen_course[0]['CourseName']; ?> </td></tr>
  <tr><td>Etc Points</td><td> <?php echo $chosen_course[0]['ectPoints']; ?> </td></tr>
</table>
<a href="<?php echo site_url('Course_ctl/delete_course/') . $idCourse; ?>"> <button class="btn btn-danger" >Delete</button></a>
<a href="<?php echo site_url('Course_ctl/show_courses'); ?>"> <button class="btn btn-primary">Cancel</button></a>
