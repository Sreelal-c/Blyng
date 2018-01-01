<?php
include "include/header.php";
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

if ($valid) {
    $user = new user();
    $status =  $user->updateinfo($id,$name,$email,$password,$gender);
    if($status == true)
      echo "<script type='text/javascript'>alert('Successfuly updated!');</script>";
      else { ?>
        <script type='text/javascript'>alert("Login Failed: Please enter a valid Email");</script>
        <?php
        }
  }
}
?>
<style type="text/css">
    span{
      color:red;
    }
</style>
<div class="container">
    <div class="col-sm-6">
    <form method="post" action="">
    <br/>
    <p class="h5 text-center mb-4">Update Your Account Details</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="name" value="<?php echo $name ?>" id="orangeForm-name" class="form-control">
        <label for="orangeForm-name">Your name</label>
        <span class="error" ><?php echo $namerr;?><?php echo $nameErr1;?></span>
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text"  name="email" value="<?php echo $email ?>" id="orangeForm-email" class="form-control">
        <label for="orangeForm-email">Your email</label>
        <span class="error" ><?php echo $emerr;?><?php echo $msg1;?></span>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="orangeForm-pass" class="form-control" name="password">
        <label for="orangeForm-pass">New Password</label>
        <span class="error" > <?php echo $paserr;?></span>
        
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="orangeForm-pass" class="form-control"  name="cpassword">
        <label for="orangeForm-pass">Confirm new password</label>
        <span class="error" ><?php echo $cpaserr;?><?php echo $msg1;?></span>
    </div>
    <div class="form-horizontal">
    Gender <span class="error" ><?php echo $generr;?></span>
    <div class="form-group">
        <input name="gender" type="radio" value="male" id="radio1" <?php if($gender=="male") echo "checked"; ?>>
        <label for="radio1">Male</label>
    </div>

    <div class="form-group">
        <input name="gender" type="radio" value="female" id="radio2" <?php if($gender=="female") echo "checked"; ?> >
        <label for="radio2">Female</label>
    </div>
    </div>
    <div class="text-center">
        <button class="btn btn-deep-orange" type="submit" name="submit" value="submit">Update Changes</button>
    </div>
    </form>
</div>
</div>
<?php include "include/footer.php"; ?>