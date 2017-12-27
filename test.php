<?php
include_once("class_user.php");
/*
$user = new user();
$status = $user->register("sreelal", "sreelal.ub@gmail.com", "password","male");
if($status == true)
    echo "success";
    else {
        echo "failed";
    }
*/

$user2 = new user();
list($status,$id) = $user2->login("sreelal.ub@gmail.com","password");
if($status == true)
    echo "<br/>Login is success. Login id: ". $id. "</br>";
    else {
        echo "failed";
}

$user = new user();
list($id,$name,$email,$gender,$status) = $user->getuserinfo('5');
echo "Get user info: (id,name,email,gender,status)  ". $id.", ".$name.",  ".$email.",   ".$gender.",   ".$status."<br/>";

?>