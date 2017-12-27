<?php
session_start();
require_once "class_user.php";
if(!isset($_SESSION['id']))
 {
   header('location:login.php');
 }
$user = new user();
list($id,$name,$email,$gender,$status) = $user->getuserinfo($_SESSION['id']);
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="script.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    <script>
           function scrollWin() {
            window.scrollBy(0, 100);
            }
            </script>
  </head>

  <body>

  <header>
  <nav class="mb-1 navbar navbar-expand-lg sticky-top navbar-dark indigo lighten-1">
        <a class="navbar-brand" href="#">-NChat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="home.php"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="friends.php"><i class="fa fa-users"></i>Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="profile.php"><i class="fa fa-user"></i>Profile</a>
                </li> 
            </ul>
        </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light" href="messages.php"><i class="fa fa-envelope"></i>Messages <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="settings.php"><i class="fa fa-gear"></i> Settings</a>
                </li>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/user.png" class="img-fluid rounded-circle z-depth-0">Sreelal C</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">
                        <a class="dropdown-item waves-effect waves-light" href="#">Edit Profile</a>
                        <a class="dropdown-item waves-effect waves-light" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
          </div>
         </div>
       </nav>
    </header>
    <main>