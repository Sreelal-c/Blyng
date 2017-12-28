
<?php
include("header.php");
?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="members">
              <h1 class="page-header">Friend Requests</h1>
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/user.png" class="img-thumbnail" width="100" height="100" alt="">
                  <div class="text-center">User Name</div>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-success btn-block"><i class="fa fa-check"></i> Confirm</a></p>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-danger btn-block"><i class="fa fa-times"></i> Reject</a></p>
                </div>
                <div class="col-md-3">
                  <p><a href="profile.php" class="btn btn-primary btn-block">
                      <i class="fa fa-external-link-square"></i> Profile</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default friends">
              <div class="panel-heading">
                <h3 class="panel-title">My Friends</h3>
              </div>
              <div class="panel-body">
                <ul>
                  
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                </ul>
                <div class="clearfix"></div>
                <a class="btn btn-primary" href="#">View All Friends</a>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>

    
<?php
include("footer.php");
?>
