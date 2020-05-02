
<?php
  session_start();
   require_once('function.php');

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
  </head>
  <body>

     <div class="register col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register Your Account</h2>
            <input class="form-control mb-2" id="registerInputf" type="text" name="firstname" value="" placeholder="First Name">
            <input class="form-control mb-2" id="registerInputl" type="text" name="lastname" value="" placeholder="Last Name">
            <input class="form-control mb-2" id="registerInpute" type="email" name="email" value="" placeholder="Email">
            <input class="form-control mb-2" id="registerInputp" type="password" name="password" value="" placeholder="Password">
            <button class="btn btn-warning margin" type="button" id="reg" >Submit</button>

     </div>
      <p class="success text-center">

      </p>
      <div class="link">
         Have an Account? <a href="login.php">Please Login</a>
      </div>

    <script src="public/js/jquiry.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>

  </body>
</html>
