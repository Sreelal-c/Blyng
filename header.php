<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dobble Social Network</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>

  <body>

  <header >
    <div class="container" >
      <img src="img/logo1.png" class="logo" alt="">
      <form class="form-inline">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">search for friends</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="search your friends">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
         </form>
  
        <div class="left">
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user1.png" class="user-image" alt="user image" style="width: 50px;  border-radius: 50%">
              <span class="hidden-xs">BASIL PV</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <img src="img/user1.png" class="user-image" alt="user image" style="width: 90px;  border-radius: 50%">

                <p style="color: #000000">
                  basilkinaoorpv@gmail.com</p>
                  <small style="color: #000000">Phone number- 8138835055</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Messages</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="uprofile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </div>
        </div>

       <!-- <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
        </div>-->
        <!--<div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Sign in</button><br>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>-->
     
  </header>

    <nav class="navbar " >

      <div class="container" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav"  >
            <script>
           function scrollWin() {
            window.scrollBy(0, 100);
            }
            </script>

            <li class="active"><a href="home.php"><i class="material-icons">home</i>Home</a></li>
            <li><a href="members.php"><i class="material-icons">people</i> Friend Requests</a></li>
            <li><a href="messages.php"><i class="material-icons">forum</i>Messages<span class="badge">17</span></a></li>
            
            <!--<li><a href="photos.html">Photos</a></li>-->
            <li><a href="profile.php"><i class="material-icons">face</i>Profile</a></li>

            




            
          </ul>
          <a href=""></a></a>
        </div><!--/.nav-collapse -->
      </div>

    </nav>