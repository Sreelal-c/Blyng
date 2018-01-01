 
<?php
include("include/header.php");
?>

<script type="text/javascript">
   $(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
      return false;
    });
  });
</script>
                  
<section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $name; ?></h3>
              </div>
              
            </div>
            <div class="panel panel-default post">
              <div class="panel-body">
                 <div class="row">
                  
          <!-- DIRECT CHAT WARNING -->
          
            <div class="box-header with-border">
              <h3 class="box-title"> </h3> 
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages"  class="scroll-down" address="true">
                <!-- Message. Default to the left -->

                <div class="direct-chat-msg" >
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="assets/img/user1.png" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix" >
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="assets/img/user1.png" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text" style="background-color: #ADD8E6">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->


                 <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix" >
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="assets/img/user1.png" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text" style="background-color: #ADD8E6">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                
                 <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix" >
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="assets/img/user1.png" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text" style="background-color: #ADD8E6">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>

                 <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix" >
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="assets/img/user1.png" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text" style="background-color: #ADD8E6">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>

              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="direct-chat-contacts" style="background-image: linear-gradient( #ADD8E6,  #ADD8E6 60%,  #E0FFFF); height: 450px;"  class="scroll-down" address="true" >
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
<ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>



                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>

                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>


                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>

                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="assets/img/user1.png" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                    <div class="clearfix" style="outline-color: #000000"></div>
                  </li>

                  <!-- End Contact Item -->
                </ul>
                



              </div>
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div>
                   
                 </div>
              </div>
            </div>
           
            
          
     
    </section>

<?php
include("include/footer.php");
?>