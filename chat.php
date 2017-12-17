<?php
  session_start();
      require_once("./views/templates/header2.php");
?>
<link type="text/css" rel="stylesheet" href="style.css" />

 </div></div>
         <br><br><br><br>

<div id="wrapper">
    <div id="menu">

<p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>        <p class="logout"><a id="exit" href="inde.php">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"><?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?></div>
     
    <form name="message" action="">
        <input name="user" type="text" id="user" size="63" />
        <input name="submit" type="submit"  id="submit" value="Send" />
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document

$("#submit").click(function(){   
        var clientmsg = $("#user").val();
        $.post("post.php", {text: clientmsg});              
        $("#user").attr("value", "");
        return false;
    });

function loadLog(){     

        $.ajax({
            url: "log.html",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div               
            },
        });
    }

    function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "log.html",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }
    setInterval (loadLog, 2500);    //Reload file every 2500 ms

</script>
</body>
</html>

<?php
  
      require_once("./views/templates/footer1.php");

?>