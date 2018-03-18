<h2>Edit a Student</h2>
<form class="" action="<?php echo site_url('Students/save_edited'); ?>" method="post">
  <input type="hidden" name="idStudent" value="<?php echo $idStudent; ?>">
  <label for="">First Name</label><br>
  <input type="text" name="firstname" value="<?php echo $chosen_student[0]['firstname']; ?>"><br>

  <label for="">Last Name</label><br>
  <input type="text" name="lastname" value="<?php echo $chosen_student[0]['lastname']; ?>"><br>

  <label for="">Group</label><br>
  <input type="text" name="group" value="<?php echo $chosen_student[0]['group']; ?>"><br>

  <label for="">Email</label><br>
  <input type="text" name="email" value="<?php echo $chosen_student[0]['email']; ?>"><br>

  <label for="">Street Address</label><br>
  <input type="text" name="StreetAddress" value="<?php echo $chosen_student[0]['StreetAddress']; ?>"><br>

  <label for="">Birth Year</label><br>
  <input type="text" name="birthYear" value="<?php echo $chosen_student[0]['birthYear']; ?>"><br>

  <label for="">Postal Code</label><br>
  <input type="text" name="PostalCode" value="<?php echo $chosen_student[0]['PostalCode']; ?>"><br>
  
  <input class="btn btn-primary" type="submit" name="" value="Save">
  <a href="<?php echo site_url('students/show_students'); ?>"> <button class="btn btn-primary">Cancel</button></a>


</form>
