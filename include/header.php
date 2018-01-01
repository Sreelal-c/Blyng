<?php
session_start();
require_once "class_user.php";
if(!isset($_SESSION['id']))
 {
   header('location:../login.php');
 }
$user = new user();
list($id,$name,$email,$gender,$status,$photo) = $user->getuserinfo($_SESSION['id']);
$file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NChat</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap-notify.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
           function scrollWin() {
            window.scrollBy(0, 100);
            }
            </script>
  </head>

  <body>

  <header>
  <nav class="mb-1 navbar navbar-expand-lg fixed-top navbar-dark blue lighten-1">
        <a class="navbar-brand" href="#">-Nchat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($file=='home') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="home.php"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($file=='friends') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="friends.php"><i class="fa fa-users"></i>Friends</a>
                </li>
                <li class="nav-item <?php if($file=='profile') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="profile.php"><i class="fa fa-user"></i>My Profile</a>
                </li>
                <li class="nav-item <?php if($file=='groups') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="groups.php"><i class="fa fa-dot-circle-o"></i>Groups</a>
                </li> 
            </ul>
        </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($file=='messages') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="messages.php"><i class="fa fa-envelope"></i>Messages <span class="sr-only"></span></a>
                </li>
                <li class="nav-item <?php if($file=='edit') echo 'active' ; ?>">
                    <a class="nav-link waves-effect waves-light" href="edit.php"><i class="fa fa-gear"></i>Edit Proile</a>
                </li>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if($photo!="") echo "<img src='upload/".$photo."' class='img-thumbnail img-fluid rounded-circle z-depth-0' alt=''>";
                      else echo "<img src='assets/img/user.png' class='img-thumbnail img-fluid rounded-circle z-depth-0' alt=''>" ;
                    ?>
                 <?php echo "  ".strtoupper($name); ?></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">
                        <a class="dropdown-item waves-effect waves-light" href="settings.php">Settings</a>
                        <a class="dropdown-item waves-effect waves-light" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
          </div>
         </div>
       </nav>
    </header>
    <body>
    <main>