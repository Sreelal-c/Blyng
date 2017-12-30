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
        	 move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $newfilename);
	 		 $sql = "UPDATE register SET photo='$newfilename' WHERE loginid='$id' ";
             $result = $conn->query($sql);
                if ($result) echo "Successfully updated. Please refresh your browser";       
		
	}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}

?>