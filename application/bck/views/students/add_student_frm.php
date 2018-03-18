<h2>Add a Student</h2>
<form class="" action="<?php echo site_url('Students/add_student_to_db'); ?>" method="post">
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
  <input type="text" name="PostalCode" value=""><br>
  

  <input type="submit" name="" value="Add">
</form>
