$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder="image/".$filename;

move_uploaded_file($tmp_name,$folder);