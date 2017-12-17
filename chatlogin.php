<?php
  session_start();
    ?>

<?php
$msg = null;
if(isset($_POST['submit'])){
  $email = $_POST['username'];
  $password = $_POST['password'];
      $conn = new mysqli("localhost","root","","centralised_pc");
      //3.Insert into table
      $sql_query="SELECT * FROM chat WHERE email = '$email' AND password = '$password'";

      $result=$conn -> query($sql_query);
      //4.Result of insert query
      
        //$result = $mysql -> get_data('pcu', '*', "email = '$email' and password = '$password'"); 

if ($result->num_rows >0) {
       while($row = $result->fetch_assoc()) {

    $_SESSION['logged_in'] = true;
    $_SESSION['name'] =$row['name'];
    $_SESSION['user_id'] = $row['id'];
    header("location:chat.php");
    exit;
    
  } }else {
print '<script type="text/javascript">';
    print 'window.onload = function(){';
    print 'alert("failed")';
    print '}';
print '</script>';


    
  }

      $conn1 = new mysqli("localhost","root","","centralised_pc");
      //3.Insert into table
      $sql_query1="SELECT * FROM pcu WHERE email = '$email' AND password = '$password'";

      $result1=$conn1 -> query($sql_query1);
      //4.Result of insert query
      
        //$result = $mysql -> get_data('pcu', '*', "email = '$email' and password = '$password'"); 

if ($result1->num_rows >0) {
       while($row = $result1->fetch_assoc()) {

    $_SESSION['logged_in'] = true;
    $_SESSION['name'] = "pcu ".$row['name'];
    $_SESSION['user_id'] = $row['id'];
    header("location:chat.php");
    exit;
    
  } }else {
print '<script type="text/javascript">';
    print 'window.onload = function(){';
    print 'alert("failed")';
    print '}';
print '</script>';
    
  }
$conn2 = new mysqli("localhost","root","","centralised_pc");
      //3.Insert into table
      $sql_query2="SELECT * FROM medical WHERE email = '$email' AND password = '$password'";

      $result2=$conn2 -> query($sql_query2);
      //4.Result of insert query
      
        //$result = $mysql -> get_data('pcu', '*', "email = '$email' and password = '$password'"); 

if ($result2->num_rows >0) {
       while($row = $result2->fetch_assoc()) {

    $_SESSION['logged_in'] = true;
    $_SESSION['name'] = "Medical Worker ".$row['name'];
    $_SESSION['user_id'] = $row['id'];
    header("location:chat.php");
    exit;
    
  } 
}else {
echo "<script type=\"text/javascript\">".
                  "alert(' failed');".
                "</script>";





}
}
 ?>




 <?php
    require_once("./views/templates/header2.php");


 ?></div>    </div>
<link type="text/css" rel="stylesheet" href="style.css" />


<div class="row container">

    <div class="col-md-4">
      
      <p>

 </p>
    </div>
    <div class="col-md-4">
    <br><br><br><br>
     <i><b> Login for best doctors-patients interaction ever!</i></b>

      <br><br><br> <br><br><br><br><br><br><br>
      <form method="post">
        <div>
          <label>Username</label>
          <input type="text" name="username" text-align="left" placeholder="Enter the Email ID">
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter the Password">
        </div>
        <div class>
          <input type="submit" name="submit" value="Login">
        </div>
        <div>
          <a href="signup.php">sign up</a> |
          <a href="forgot.php">Forgot Password</a>
        </div>
        

         
      </form>

    </div>

    <?php

  require_once("./views/templates/footer1.php");

    ?>