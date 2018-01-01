<?php
$conn = new mysqli("localhost", "root", "","nchat");
if(isset($_FILES["file"]["type"]))
{   $id = $_POST['id'];
	$filename = $_FILES['file']['name'];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
    $file_ext = substr($filename, strripos($filename, '.')); // get file extention
    $allowed_file_types = array('.jpeg','.png','.jpg','.JPEG','.JPG');
    $file_size = $_FILES['file']['size'];
    list($width,$height) = getimagesize($_FILES['file']['tmp_name']);

    if (in_array($file_ext,$allowed_file_types) && ($file_size<1024*1000))
    {
            $newfilename = rand(1000,1000000) . $file_ext;
            //move the new uploaded file
             move_uploaded_file($_FILES['file']['tmp_name'], "../upload/" . $newfilename);
             $query = "SELECT photo from register where loginid='$id'";
             $r = $conn->query($query);
             if($r) { $d = $r->fetch_assoc(); 
                // check if the old file name exists
                if(file_exists('../upload/'.$d['photo']))
                        // delete the old file if it exists
                        if(!unlink('../upload/'.$d['photo'])) 
                            { echo "Error deleting file"; } ;
                    }
                // update the table with new file name
	 		 $sql = "UPDATE register SET photo='$newfilename' WHERE loginid='$id' ";
             $result = $conn->query($sql);
                if ($result) echo "<p style='color:green'><br/>Successfully updated your profile picture. Please refresh your browser</p>";       
		
    }
    else
        {
        echo "<span id='invalid' style='color:red'><br/>Failed! File is not an image or large image size<span>";
        }
    }
else
{
echo "<span id='invalid'><br/>Please select a file to be uploaded<span>";
}

?>