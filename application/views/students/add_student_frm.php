<h2>Add a Student</h2>
<form class="" action="<?php echo site_url('Students_ctl/add_student_to_db'); ?>" method="post">
  <label for="">idStudent</label> <br>
  <input type="number" name="idStudent" value=""> <br>

  <label for="">First Name</label><br>
  <input type="text" name="firstname" value=""><br>
  
  <label for="">Last Name</label><br>
  <input type="text" name="lastname" value=""><br>
  
  <label for="">Group</label><br>
  <input type="text" name="group" value=""><br>
  
  <label for="">Email</label><br>
  <input type="text" name="email" value=""><br>
  
  <label for="">Street Address</label><br>
  <input type="text" name="StreetAddress" value=""><br>
  
  <label for="">Birth Year</label><br>
  <input type="text" name="birthYear" value=""><br>

  <label for="">Postal Code</label><br>
  <select class="" name="PostalCode">
    <?php
    foreach ($postalcode as $row) {
      echo '<option value="'.$row['PostalCode'].'">'.$row['PostalCode'].'</option>';
    }
    ?>
  </select>
  <br>
  <br>
  
  <input class="btn btn-primary" type="submit" name="std_btn_submit" value="Add">
  <input class="btn btn-danger" type="submit" name="std_btn_Cancel" value="Cancel">
  
</form>
