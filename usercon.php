<?php
    session_start();

    require_once('function.php');

    if (isset($_POST['login'])) {
      $email=$_POST['email'];

      $password=$_POST['password'];
      $query=mysqli_query($connect,"SELECT * FROM userinfo WHERE email='$email'");
      $fetch=mysqli_fetch_assoc($query);
      
      $pass=$fetch['password'];

      $firstname=$fetch['first_name'];

      $lastname=$fetch['last_name'];
      if ($pass==$password) {
        $_SESSION['log']="successfully";
        $_SESSION['first_name']=$firstname;
        $_SESSION['last_name']=$lastname;
        echo "success";
      }



    }

 ?>
