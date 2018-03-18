<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>



  <link rel="stylesheet" href="css/style.css">


</head>

<body>


  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

  </head>
  <div id="login">
    <form name='form-login' class="" action="<?php echo site_url('login/log_in'); ?>" method="post">

      <span class="fontawesome-user"></span>
      <input type="text" name="username" id="user" placeholder="Username">
      <span class="fontawesome-lock"></span>
      <input type="password" name="password" id "pass" placeholder="Password">
      <input type="submit" value="Login">
    </form>
</div>

  


</body>

</html>
