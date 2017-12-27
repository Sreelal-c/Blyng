<?php

class dbConnect {  
    public $conn;
    
  function __construct() { 
        echo "<br/> constructing db"; 
        $conn = new mysqli("localhost", "root", "", "nchat"); 
        if($conn->connect_error)// testing the connection  
        {  
            die ("Cannot connect to the database");  
        }   
        return $conn;  
}  
}
/*

$conn = new mysqli("localhost", "root", "","nchat");
if(!$conn->connect_error){
    
}

*/
?>