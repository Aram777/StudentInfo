<h2>Grade a Student</h2>
<form class="" action="<?php echo site_url('Grades_ctl/save_edited'); ?>" method="post">

<input type="hidden" name="idGrades" value="<?php echo $idGrades; ?>">
<input type="hidden" name="idStudent" value="<?php echo $idStudent; ?>">

  <label for="">Grade</label><br>
  <input type="number" name="arvosana" value="<?php echo $chosen_grade[0]['arvosana']; ?>"><br>


  <input class="btn btn-primary" type="submit" name="submit_grd_btn" value="Save">
  <a href="<?php echo site_url('Grades_ctl/show_student_grade')."/".$idStudent; ?>"> <button class="btn btn-danger">Cancel</button></a>


</form>
