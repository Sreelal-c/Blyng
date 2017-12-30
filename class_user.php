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
        $query = "INSERT INTO posts(userid,post,image) VALUES($userid,$content,$image)";
        $result = $this->db->query($query);

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
        $values = array("0"=>$row['loginid'],"1"=>$row['name'],"2"=>$row['email'],"3"=>$row['gender'],"4"=>$row['status'],"5"=>$row['photo']);
        return $values;
    }

    public function updateinfo($id,$name,$email,$password,$gender){
        $pass = sha1($password);
        $query = "UPDATE register SET name='$name', email='$email', password='$pass', gender='$gender' WHERE loginid= '$id' ";
        $result = $this->db->query($query);
        if($result) 
            return true;
        else 
            return false;
    }

    public function sendfriendrequest($sender,$receiver){
        $q1 = "SELECT * FROM friendlist where (sendid='$sender' AND recid = '$receiver') OR ( sendid='$receiver' AND recid = '$sender') " ;
        $r1 = $this->db->query($q1);
        if($r1->num_rows>0){
            $row1 = $r1->fetch_assoc();
            if($row1['status']==1)
                return 1;  // already friends
            else  if($row1['status']==2) 
                    return 2; // rejected already
        }
        else {
        $query = "INSERT INTO friendlist(sendid,recid,status) values('$sender','$receiver','0')";
        $result = $this->db->query($query);
        if($result) 
            return true;
        else 
            return false;
        }
    }

    public function confirm_friend_request($receiver,$sender) {
        $query = "UPDATE friendlist SET status = 1 WHERE (sendid='$sender' AND recid = '$receiver') OR ( sendid='$receiver' AND recid = '$sender')";
        $result = $this->db->query($query);
        if($result) 
            return true;
        else 
            return false;
        }
        public function get_friends_list($id){
            $query = "SELECT * FROM friendlist  INNER JOIN register 
            ON friendlist.recid=register.loginid 
            WHERE (friendlist.sendid='$id' OR friendlist.recid = '$id') AND friendlist.status = '1'";
            $result = $this->db->query($query);
            if($result) 
                return $result->fetch_assoc();
            else 
                return false;
            }
    
}

class friendship extends user{
    private $conn;
    public function __construct()
    {
        // call user's constructor
        parent::__construct();
        $this->conn = user::$db;

    }

    public function get_friends_list($id){
        $query = "SELECT * FROM friendlist  INNER JOIN register 
        ON friendlist.recid=register.loginid 
        WHERE (friendlist.sendid='$id' OR friendlist.recid = '$id') AND friendlist.status = '1'";
        $result = $this->conn->query($query);
        if($result) {
            $row = $result->fetch_assoc();
            return $row;
        }
        else 
            return false;
        }
    
}
?>