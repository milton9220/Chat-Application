<?php

     require_once('config.php');

     function email_exit(){
       global $connect;
       global $email;
        $query=mysqli_query($connect,"SELECT * FROM userinfo WHERE email='$email'");
        if(mysqli_num_rows($query)==1){
          return true;
        }

     }

     function user_login(){
       if(isset($_SESSION['log'])){
         return true;
       }
     }

 ?>
