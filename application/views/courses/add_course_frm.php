<h2>Add a Course</h2>
<form class="" action="<?php echo site_url('Course_ctl/add_course_to_db'); ?>" method="post">
  <label for="">Course Id</label> <br>
  <input type="number" name="idCourse" value=""> <br>

  <label for="">Course Name</label><br>
  <input type="text" name="CourseName" value=""><br>
  
  <label for="">ETC Points</label> <br>
  <input type="number" name="ectPoints" value=""> <br>

  <br>
  <br>
  
  <input class="btn btn-primary" type="submit" name="std_btn_submit_Crs" value="Add">
  <input class="btn btn-danger" type="submit" name="std_btn_Cancel_Crs" value="Cancel">
  
</form>
