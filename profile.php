
<?php
include("header.php");
/*
if(isset($_GET['profileid'])) {
  list($id,$name,$email,$gender,$status,$photo) = $user->getuserinfo($_GET['profileid']);
}
*/
?>

    <section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change your profile picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="uploadimage"  action="" method="post" enctype="multipart/form-data">
            <div id="image_preview" ><center><img id="previewing" src="img/imgfall.png" /></center></div>
            <hr id="line">
            <h6>Select an image</h6>
            <input type="file" name="file" id="file" required  name="img" />
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div id="message"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value="Upload"  name="isubmit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header"><?php echo strtoupper($name); ?></h1>
              <div class="row">
                <div class="col-md-4">
                <?php if($photo!="") echo "<img src='upload/".$photo."' class='img-thumbnail' alt=''>";
                      else echo "<img src='img/user.png' class='img-thumbnail' alt=''>" ;
                 ?>
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><strong>Name:</strong><?php echo "   ".strtoupper($name); ?></li>
                    <li><strong>Email:</strong><?php echo "    ".strtolower($email); ?></li>
                    <li><strong>Gender:</strong><?php echo "     ".strtoupper($gender); ?></li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Change Profile Photo
          </button>
                  </ul>
                </div>
              </div><br><br>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    
                    
                     
                  </div>
                </div>
              </div>
            </div>
             <div class="panel-heading">
                <h3 class="panel-title">Wall</h3>
              </div>
              <div class="panel panel-default post">
              <div class="panel-body">
                 <div class="row">
                   <div class="col-sm-2">
                     <a href="profile.html" class="thumbnail">
                       <img class="img img-responsive" width="60" height="60" src="img/user.png" alt=""><div class="text-center">DevUser1</div>
                      </a>
                     <div class="likes text-center">7 Likes</div>
                   </div>
                   <div class="col-sm-10">
                     <div class="bubble">
                       <div class="pointer">
                         <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                       </div>
                       <div class="pointer-border"></div>
                     </div>
                     <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                     <div class="comment-form">
                       <form class="form-inline">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter your comments">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                     </div>
                     <div class="clearfix"></div>

                     <div class="comments">
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                   </div>
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

            <div class="col-sm-12">
            <div class="card">
                  <h3 class="card-header primary-color white-text">Latest Groups</h3>
                   <div class="card-body">
                   <div class="group-item">
                              <img src="img/group.png" width="50" height="50" alt="">
                              <h5><a href="#" class="">Sample Group One</a></h5>
                              <p>This is a paragraph of intro text, or whatever I want to call it.</p>
                    </div>
                     <div class="clearfix"></div>
                        <div class="group-item">
                              <img src="img/group.png" width="50" height="50" alt="">
                              <h5><a href="#" class="">Sample Group Two</a></h5>
                              <p>This is a paragraph of intro text, or whatever I want to call it.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="group-item">
                              <img src="img/group.png" width="50" height="50" alt="">
                              <h5><a href="#" class="">Sample Group Three</a></h5>
                              <p>This is a paragraph of intro text, or whatever I want to call it.</p>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-primary">View All Groups</a>
                          </div>
                        </div>
                  </div>
              </div>        
        </div>
      </div>
    </section>

    
<?php
include("footer.php");
?>
