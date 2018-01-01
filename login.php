<?php
require_once "include/class_user.php";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=trim($_POST['password']);
$user = new user();
list($status,$id) = $user->login($email,$password);
if($status == true){
  session_start();
  $_SESSION['id'] = $id;
  header('location: home.php');
}
else { ?>
      <script type='text/javascript'>alert("Login Failed: Please enter a valid Email");</script>
      <?php
      }
    }
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>-NChat Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
<div class="pen-title">
  <h1> -NChat Login </h1><span>chat <i class='fa fa-code'></i> by Basil & Sreelal</span>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title" style="color: #ADD8E6">Login</h1>
    <form method="post" action="">
      <div class="input-container">
        <input type="text" id="email" name="email" required="required"/>
        <label for="email">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit"><span>Go</span></button>
      </div>
      <div class="footer"><a href="register.php">Register New Account?</a></div>
    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="assets/js/login.js"></script>
</body>
</html>
