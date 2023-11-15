<?php

include('connection.php');

$id= $_GET['id'];
$status= $_GET['status'];

$q= "update registerinfo set status=$status where id='$id'";
mysqli_query($con,$q);

header("location:admin_edit.php");

?>