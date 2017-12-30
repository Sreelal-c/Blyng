
<?php
include("header.php");
$conn = new mysqli("localhost", "root", "","nchat");
if(isset($_GET['fmsg'])){
  $fmsg = $_GET['fmsg'];
  if($fmsg=="success") {
?>
<div class="alert alert-success alert-dismissible fade show container" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Success!</strong> Request has been sent.
</div>
  <?php 
  } 
  else if($fmsg=="fail") {
  ?>
<div class="alert alert-danger alert-dismissible fade show container"  role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Oh snap!</strong> Failed to send request. Try again.
</div>
  <?php } 
}?>
<section>
<div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10">

            
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified cyan" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i> Friends</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-search"></i> Find Friends</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-heart"></i> Request</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
     <h3> My Friends </h3>
     <hr>
      <?php 
        //$friendlist = new friendship();
        $friends = $user->get_friends_list($id);
        if($friends!=false){
          ?>
          <div class="members">
            <div class="row member-row">
              <div class="col-md-2">
              <?php if($friends['photo']!="") echo "<img src='upload/".$friends['photo']."' class='img-thumbnail' width='60' height='60' alt=''>";
                        else echo "<img src='img/user.png' class='img-thumbnail'  width='100' height='100' alt=''>" ;
                   ?>
                <div><b><?php echo $friends['name']; ?></b></div>
              </div>
              <div class="col-md-3">
                <p><a href="view.php?profileid=<?php echo $friends['loginid'] ?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-external-link-square"></i> Profile</a> </p>
              </div>
            </div> <!-- row -->
          </div> <!-- member -->
            <?php 
                } 
                 else echo "<div class='row member-row'><p><b> You have no friends </b></p></div>";
                ?>
             
          
    </div>


    <!--Panel 1-->
    <div class="tab-pane fade" id="panel6" role="tabpanel">
        <br>
        <h4> Find Friends </h4>
         <form class="form-inline">
         <div class="md-form col-sm-4">
                <i class="fa fa-search prefix"></i>
                <input type="text" id="search" class="form-control validate">
                <label for="search" data-error="wrong" data-success="right">Search</label>
        </div>
        <div class="md-form form-group">
            <a class="btn btn-success btn-md">Search</a>
        </div>
        </form>
        <hr>
        <p> <b> Reccomended People</b></p>
        <?php
         
          $sql = "SELECT * FROM register WHERE NOT loginid='$id'" ;
          $res = $conn->query($sql);
          if($res)
          while($rows = $res->fetch_assoc()){

        ?>
         <div class="members">
        
          <div class="row member-row">
            <div class="col-md-3">
            <?php if($rows['photo']!="") { echo "<img src='upload/". $rows['photo']."' class='img-thumbnail' width='100' height='100' alt=''>" ; } else {?>
              <img src="img/user.png" class="img-thumbnail" width="100" height="100" alt="">
            <?php } ?>
              <div><b><?php echo $rows['name']; ?></b> </div>
            </div>
            <div class="col-md-4">

              <?php 
               $rec = $rows['loginid'];
               $sql2 = "SELECT * FROM friendlist WHERE (sendid='$id' AND recid='$rec') OR (recid='$id' AND sendid='$rec')";
               $res2 = $conn->query($sql2);
               if($res2->num_rows>0) {
                 $r3 = $res2->fetch_assoc();
                  if($r3['status']=="1") {
               ?>
                <p><a href="#" class="btn btn-success btn-block"><i class="fa fa-check"></i> Friends</a></p> 
                  <?php } else { ?>
                <p><a href="#" class="btn btn-warning btn-block"><i class="fa fa-paper-plane"></i> Request Sent</a></p>
               <?php } } else { ?>
              <p><a href="functions/friend_request.php?code=1&sender=<?php echo $id;?>&receiver=<?php echo $rows['loginid']; ?>" class="btn btn-primary btn-block">
              <i class="fa fa-paper-plane"></i> Send Request</a></p>
               <?php } ?>
            </div>
            
            <div class="col-md-3">
              <p><a href="profile.php" class="btn btn-primary btn-block"><i class="fa fa-external-link-square"></i> Profile</a> </p>
            </div>
          </div> <!-- row -->
        </div> <!-- member -->
        <?php 
          }
        else echo "No results";
        ?>    
    </div>   
     

    <!--/.Panel 1-->
    <!--Panel 2-->
    
    <div class="tab-pane fade" id="panel7" role="tabpanel">
        <br>
        
        <div class="members">
          <h1 class="page-header">Friend Requests</h1>
          <?php
          
          $sql = "SELECT sendid FROM friendlist WHERE (recid='$id' AND  status = '0') " ;
          $res = $conn->query($sql);
          if($res->num_rows>0){
          while($rows = $res->fetch_assoc()){
              $friendreqid = $rows['sendid'];
              $q1="SELECT * FROM register WHERE loginid='$friendreqid'";
              $q1result = $conn->query($q1);
              if($q1result->num_rows>0) {
                $r1 = $q1result->fetch_assoc();
        ?>
          <div class="row member-row">
            <div class="col-md-3">
            <?php if($r1['photo']!="") echo "<img src='upload/".$r1['photo']."' class='img-thumbnail' width='100' height='100' alt=''>";
                      else echo "<img src='img/user.png' class='img-thumbnail'  width='100' height='100' alt=''>" ;
                 ?>
              <div class="text-center"><?php echo $r1['name']; ?></div>
            </div>
            <div class="col-md-3">
              <p><a href="functions/friend_request.php?code=2&sender=<?php echo $r1['loginid']; ?>&receiver=<?php echo $id;?>" class="btn btn-success btn-block"><i class="fa fa-check"></i> Confirm</a></p>
            </div>
            <div class="col-md-3">
              <p><a href="#" class="btn btn-danger btn-block"><i class="fa fa-times"></i> Reject</a></p>
            </div>
            <div class="col-md-3">
              <p><a href="profile.php" class="btn btn-primary btn-block"><i class="fa fa-external-link-square"></i> Profile</a> </p>
            </div>
          </div> <!-- row -->
          <?php 
              } 
              } 
            } else echo "<b> No Friend Requests </b>";
              ?>
        </div> <!-- member -->
         
    <!--/.Panel 2-->
</div> <!-- tab contents -->
</div> <!-- col 1 -->
         
 
</div>
</div>
</section>

<?php
include("footer.php");
?>
