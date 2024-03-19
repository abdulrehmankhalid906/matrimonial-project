<?php
session_start();
include ('connection.php');
if(isset($_POST['register'])){

    /*Basic Info*/
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $whatsapp = $_POST['whatsapp'];
    $userid = $_POST['userid'];

    /*Personal Info*/
    $bio = $_POST['bio'];
    $self = $_POST['self'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $martial = $_POST['martial'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $sect = $_POST['sect'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $study = $_POST['study'];
    $occup = $_POST['occup'];
    $income = $_POST['income'];
    $nation = $_POST['nation'];
    $status = 0;
    $city = $_POST['city'];
    $image = $_FILES['user_image']['name'];
    $filename = $_FILES['user_image']['name'];

    /*Insert Query*/
    $query = "INSERT INTO registerinfo (username,email,password,status,whatsapp,user_image,userid,bio,self,gender,age,
    martial,religion,caste,sect,color,height,study,occup,income,nation,city)
    VALUES ('$username','$email','$password','$status','$whatsapp','$image','$userid','$bio','$self','$gender','$age','$martial',
    '$religion','$caste','$sect','$color','$height','$study','$occup','$income','$nation','$city')";
    $query_run = mysqli_query($con,$query);

    //totally optional if user want to upload pic or not.
    if($query_run){
        move_uploaded_file($_FILES["user_image"]["tmp_name"],"profile/".$_FILES["user_image"]["name"]);
        echo"Registeration is successfully done";
        header('location:fee.php');
    }
    else{
        echo"Due to some issue registeration is not done";;
        header('location:register.php');
    }
}
?>