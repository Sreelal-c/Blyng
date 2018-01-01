<?php 
require_once "include/class_user.php";
$namerr=$emerr=$paserr=$cpaserr=$generr=$doberr=$chcerr=$msg1=$nameErr1="";
$valid=true;
if (isset($_POST['submit'])) {

  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  if(isset($_POST['gender'])) {
      $gender=$_POST["gender"];
    }
  else
  {
      $generr= "Please choose gender";
      $valid=false;      
  }
 if($name=="")
  {  $namerr= "Name is required";
      $valid=false;   
   }
   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr1 = "Only letters and white space allowed"; 
    $valid=false;
}

  if($email=="") {  
    $emerr= "email is required";
    $valid=false; 
    if ($valid) {
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)!==false) 
    {
        $msg1= "Enter a valid email address";
        $valid=false;
        if ($valid) {
          $sql1=" select email from register where  email='$email'";
          $res1=mysqli_query($db,$sql1);
          if($res1)
          {
           $emerr=" Email already Exists";
           $valid=false;
           }
      }
    }
  }
}
  
    if($password==""){          
      $paserr= "Password is required";
      $valid=false;   
    }
    if (empty($_POST['cpassword'])) {
      $cpaserr= "Please confirm your password ";
      $valid=false;   
    }
    if ($password!=$_POST['cpassword']) {
      $cpaserr= " Passwords do not match ";
      $valid=false;   
    }

    if (!isset($_POST['terms'])) {
      $chcerr="Please accept the terms and condition";
      $valid=false;
    }

if ($valid) {
    $user = new user();
    $status =  $user->register($name,$email,$password,$gender);
    if($status == true)
      header('location:login.php');
      else { ?>
        <script type='text/javascript'>alert("Login Failed: Please enter a valid Email");</script>
        <?php
        }
  }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="assets/css/register.css">
  <style type="text/css">
    span{
      color:red;
    }
</style>
  
</head>

<body>
  
<div class="container">
  <form action="" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="name" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
        <span class="error" >* <?php echo $namerr;?><?php echo $nameErr1;?></span>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="email" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        <span class="error" >* <?php echo $emerr;?><?php echo $msg1;?></span>
      </div>
      
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="password" />
        <div class="input-icon"><i class="fa fa-key"></i></div>
        <span class="error" >* <?php echo $paserr;?></span>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Conform Password" name="cpassword" />
        <div class="input-icon"><i class="fa fa-key"></i></div>
        <span class="error" >* <?php echo $cpaserr;?><?php echo $msg1;?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
        <span class="error" >* <?php echo $generr;?></span>
      </div>
    </div>
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms" name="terms" />
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
      <span class="error" >* <?php echo $chcerr;?></span>
    </div>
    <center><button class="btn btn-primary" name="submit" >Register <i class="fa fa-send-o"></i></button></center>
    <center><label for="terms"><a href="login.php" style="text-decoration:none;">I have aleady an account!</a></label></center>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <script  src="assets/js/register.js"></script>

</body>
</html>
