<?php
include 'connection.php';
if(!isset($_SESSION['name'])){
    header('location:login.php');
}

$id = $_GET['id'];

$query = "delete from registerinfo where id=$id";

$query=mysqli_query($con, $query);

if($query){
    header('location:admin_edit.php');
}

else{
    echo "Cannot Delete the Record";
}

?>