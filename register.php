<?php 
$namerr=$emerr=$phnerr=$paserr=$cpaserr=$deserr=$generr=$doberr="";
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$Phone=$_POST['Phone'];
$password=$_POST['password'];
$dob=$_POST['dd']."/".$_POST['mm']."/".$_POST['yyyy'];
$gender=$_POST['gender'];
$Designation=$_POST['Designation'];
$db=mysqli_connect("localhost","root","","nchat");
$sql=" INSERT INTO  register(name, emai, phone, password, dob, gender, designation) VALUES ('$name','$email','$phone','$password','$dob','$gender','$Designation') ";
$res=mysqli_query($db,$sql);
}
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/loginstyle.css">

  
</head>

<body>
  
<div class="container">
  <form action="" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="name" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="email" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Phone Number" name="Phone" />
        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="password" />
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Conform Password" name="cpassword" />
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD" name="dd" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM" name="mm" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="yyyy" />
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>

    </div>
    <div class="row">
      
      <h4>Designation</h4>
      <div class="input-group input-group-icon">
         <select class="" id="sel1" name="Designation">
          <option>.......Select.......</option>
            <option value="PHP">PHP Developers</option>
            <option value="CSM">CSM</option>
             <option value="BDM">BDM</option>
            <option value="Social Media">Social Media</option>
            <option value="SEO">SEO</option>            
      </select>
      </div>   
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <center><button style="font-size:24px;background-color: #ADD8E6; " name="submit" >Sign Up<i class="fa fa-send-o"></i></button></center>
    <center><label for="terms"><a href="login.php" style="text-decoration:none;">I have aleady an account!</a></label></center>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="sign-up-form/js/index.js"></script>

</body>
</html>
