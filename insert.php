<?php
session_start();
require_once('function.php');
if (user_login()) {
  header('location: chat.php');
  die();
}


if (isset($_POST['register']) ) {
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $countemail=$connect->query("SELECT * FROM userinfo WHERE email='$email'");

   if (mysqli_num_rows($countemail) >=1) {
       echo "Sorry! email already has exit";
   }
   else{
     $query=mysqli_query($connect,"INSERT INTO userinfo (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email',$password)");
     if ($query) {
       echo "You have create your account successfully";
     }
   }



}

 ?>
