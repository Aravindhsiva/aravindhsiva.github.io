<?php
  $uname = $_POST['username'];
  $mail = $_POST['mail'];
  $to="adamaravindh@gmail.com";
  $subject="New Mail From Profile Page";
  $message = $_POST['mess'];
  mail ($to,$subject,"Username : ".$uname."\r\nMessage : ".$message);
  header('Location:confirm.html');
?>