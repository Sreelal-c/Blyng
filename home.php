<?php include "include/header.php"; ?>
<script>
    $(document).ready(function(){
      $("#comform").hide();
    });
    $(document).ready(function(){
        $("#com").click(function(){
            $("#comform").toggle();
        });
    });

   
</script>
<section>
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <div class="pull-left">
 
<!-- write a post widget -->
<div class="card">
      <h3 class="card-header primary-color white-text">Whats on your mind?</h3>
       <div class="card-body">
          <div class="form-group">
              <textarea class="form-control" placeholder="Create Your Post" name="post" rows="9"></textarea>
          </div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Select Image
          </button>
            <div class="pull-right">
                <button type="submit" class="btn btn-primary " name="submit">Post</button>
             </div>   
      </div>
  </div>
<hr style="padding:2px; color:#4E4D4B">
<!-- write a post widget  ends-->

<!-- Modal widget starts -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add an image to your post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
            <div id="image_preview" ><center><img id="previewing" src="assets/img/imgfall.png" /></center></div>
            <hr id="line">
            <h6>Select an image</h6>
            <input type="file" name="file" id="file" required  name="img" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal widget ends -->
<div class="panel panel-default post">
    <div class="panel-body">
       <div class="row">
         <div class="col-sm-2">
           <a href="profile.html" class="thumbnail">
             <img class="img img-responsive" width="60" height="60" src="assets/img/user.png" alt=""><div class="text-center">DevUser1</div>
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
           <p class="post-actions"><a href="#" id="com">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
           <div class="comment-form" id="comform">
             <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your comments">
              </div>
              <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
           </div>
           <div class="clearfix"></div>

           <div class="comments">
             <div class="comment">
               <a href="#" class="comment-avatar pull-left"><img src="assets/img/user.png" alt=""></a>
               <div class="comment-text">
                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
               </div>
             </div>
             <div class="clearfix"></div>
             <div class="comment">
               <a href="#" class="comment-avatar pull-left"><img src="assets/img/user.png" alt=""></a>
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
</div>

<!-- ----------------------- ------------------------------- -->
<!-- groups -->
<div class="col-md-4">
<div class="card">
      <h3 class="card-header primary-color white-text">Latest Groups</h3>
       <div class="card-body">
       <div class="group-item">
                  <img src="assets/img/group.png" width="50" height="50" alt="">
                  <h5><a href="#" class="">Sample Group One</a></h5>
                  <p>This is a paragraph of intro text, or whatever I want to call it.</p>
        </div>
         <div class="clearfix"></div>
            <div class="group-item">
                  <img src="assets/img/group.png" width="50" height="50" alt="">
                  <h5><a href="#" class="">Sample Group Two</a></h5>
                  <p>This is a paragraph of intro text, or whatever I want to call it.</p>
                </div>
                <div class="clearfix"></div>
                <div class="group-item">
                  <img src="assets/img/group.png" width="50" height="50" alt="">
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
include("include/footer.php");
?>
