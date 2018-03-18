<h2>Edit a Course</h2>
<form class="" action="<?php echo site_url('Course_ctl/save_edited'); ?>" method="post">
  <input type="hidden" name="idCourse" value="<?php echo $idCourse; ?>">
  
  <label for="">Course Name</label><br>
  <input type="text" name="CourseName" value="<?php echo $chosen_course[0]['CourseName']; ?>"><br>

  <label for="">Etc Points</label><br>
  <input type="number" name="ectPoints" value="<?php echo $chosen_course[0]['ectPoints']; ?>"><br>

  
  <input class="btn btn-primary" type="submit" name="submit_crs_btn" value="Save">
  <a href="<?php echo site_url('Course_ctl/show_courses'); ?>"> <button class="btn btn-danger">Cancel</button></a>


</form>
