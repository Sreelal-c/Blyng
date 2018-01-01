<?php
session_start();
if(isset($_SESSION['id'])){
include_once "../include/class_user.php";
if(isset($_GET['code']))
$code = $_GET['code'];
else $code = 0;
if($code==1){
$sender = $_GET['sender'];
$receiver = $_GET['receiver'];

$user = new user();
$status = $user->sendfriendrequest($sender,$receiver);
switch($status){
    case true : header('location:../friends.php?fmsg=success');
                break;
    case false : header('location:../friends.php?fmsg=fail');
                break;
    case 1 : header('location:../friends.php?fmsg=friends');
                break;
    case 2 : header('location:../friends.php?fmsg=fail');
                break;
    default: header('location:../friends.php');
}
}
else if($code==2){
    $sender = $_GET['sender'];
    $receiver = $_GET['receiver'];
    
    $user = new user();
    $status = $user->confirm_friend_request($receiver,$sender);
    switch($status){
        case true : header('location:../friends.php?fmsg=success');
                    break;
        case false : header('location:../friends.php?fmsg=fail');
                    break;
        case 1 : header('location:../friends.php?fmsg=friends');
                    break;
        case 2 : header('location:../friends.php?fmsg=fail');
                    break;
        default: header('location:../friends.php');
    }
    }
else echo "invalid code";
}

else {
    echo "Please Login";
}
?>