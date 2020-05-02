<?php
      session_start();
      require_once('function.php');

      if (user_login()) {
        header('location: chat.php');
        die();
      }

      if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if (email_exit()) {
            $password_query=mysqli_query($connect,"SELECT * FROM userinfo WHERE email='$email'");
            $row=mysqli_fetch_assoc($password_query);
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];

            if ($password=$row['password']) {
                $_SESSION['log']="success";
                $_SESSION['firstname']=$firstname;

                $_SESSION['lastname']=$lastname;
                $_SESSION['email']=$email;
                header('location: chat.php');
            }
            else {
              $error="password doesnot matched";
            }
        }
        else {
          $error="Sorry email doesnot matched!!";
        }
      }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
  </head>
  <body>

     <div class="register col-lg-4 mx-auto">
            <form class="" action="" method="post">
              <h2 class="text-center mb-4">Login Your Account</h2>

              <input class="form-control mb-2" id="registerInpute" type="email" name="email" value="" placeholder="Email">
              <input class="form-control mb-2" id="registerInputp" type="password" name="password" value="" placeholder="Password">
              <input type="submit" name="login" value="Login" class="btn btn-primary">
            </form> <br> <br>
      <a href="register.php" class="white">Create an Account</a> 
     </div>
     <div class="error">
        <?php if (isset($error)) {
           echo $error;
        } ?>
     </div>

    <script src="public/js/jquiry.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>

  </body>
</html>
