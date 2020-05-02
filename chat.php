<?php

session_start();
require_once('function.php');
if (!user_login()) {
  header('location: index.php');
  die();
}
if (isset($_SESSION['log'])) {
  $firstname=$_SESSION['firstname'];
  $lastname=$_SESSION['lastname'];
  $name=$firstname." ".$lastname;
}
if (isset($_POST['chatupdate'])) {
   $email=$_SESSION['email'];
   $message=$_POST['message'];

   $query =$connect->query("INSERT INTO conversation (email,message) VALUES('$email','$message')");
   die();
}
if (isset($_POST['update'])) {
    $query=$connect->query("SELECT * FROM conversation");

    while($rows=mysqli_fetch_assoc($query)){
          $email=$rows['email'];
          $sql=$connect->query("SELECT * FROM userinfo WHERE email='$email'");
          $sqlrow=mysqli_fetch_assoc($sql);
          echo '<p><span class="fullname">'.$sqlrow['firstname'].' '.$sqlrow['lastname'].':</span>'.$rows['message'].'</p>';

    }
    die();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Chat</title>
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
 <div class="head-part">
   <h2 class="text-center  mt-5">Welcome to chatbox</h2>
   <p class="name"><?php if (isset($name)) {
            echo $name;
   } ?></p>
   <p class="online">Online</p><br>
   <a href="logout.php" class="logout">Logout</a>
 </div>
 <div class="total-box">
    <div class="chat-box">
          <textarea class="chat-box" name="name" rows="8" cols="80"></textarea>
    </div>
     <form class="sendmessage" action="" method="post">
       <input type="text" name="message" class="form-control message-input" placeholder="type something.." value="">
       <input type="submit" name="send" value="send" class="btn btn-warning submit">
     </form>

 </div>


<script src="public/js/jquiry.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>
