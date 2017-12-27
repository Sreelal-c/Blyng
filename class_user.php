<?php
//require_once "config.php";

class user{
    var $userid;
    var $name;
    var $email;
    var $password;
    var $gender;
    public $db;
    public $status;

    function __construct() {   
        //echo "<br/> class users constructor working"; 
        $this->db = new mysqli("localhost", "root", "","nchat");
        if($this->db->connect_error){
            echo "Cant connect to database";
        }
       // var_dump($this->db);
    }  
    
    function __destruct() {  
          
    } 
    public function register($name,$email,$password,$gender) {
        echo "<br/> registering users <br/>";
        $this->name = $name;
        $this->email = $email; 
        $this->password = sha1($password);
        $this->gender = $gender;

        $query = "INSERT INTO register(name,email,password,gender,status) VALUES('$this->name','$this->email','$this->password','$this->gender','1')";
        $res = $this->db->query($query);
        if($res)
            return true;
        else
            return false;
    }

    public function deactivate_user($userid){
        $this->userid=$userid;

    }

    public function login($email,$password){
        $this->email = $email; 
        $this->password = sha1($password);
        $query = "SELECT * FROM register WHERE email= '$this->email' AND password='$this->password'";
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();
        if($result->num_rows > 0){
            $_SESSION['user']= $row['loginid'];
            // 0 indicate status, 1 indicates login id
            $this->status=array("0"=>true,"1" => $row['loginid']);
           //var_dump($this->status);
            return $this->status;
        }
        else {
            $this->status = array("0"=>false,"1"=>'0');
            return $this->status;
        }
    }

    public function post($userid, $content, $image){
        //insert into database
    }

    public function like($userid,$postid){
        //TODO query
    }

    public function friendrequest($senderid, $receiverid){
        //TODO 
    }

    public function getuserinfo($id){
        $this->id=$id;
        $query = "SELECT * FROM register WHERE loginid= '$this->id' ";
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();
        $values = array("0"=>$row['loginid'],"1"=>$row['name'],"2"=>$row['email'],"3"=>$row['gender'],"4"=>$row['status']);
        return $values;
    }
}

?>