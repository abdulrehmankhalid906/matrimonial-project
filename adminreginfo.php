<?php
session_start();
include ('connection.php');
if(isset($_POST['register'])){

/*Basic Info*/
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$whatsapp = $_POST['whatsapp'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
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
$city = $_POST['city'];


/*Insert Query*/
$query = "insert into registerinfo (username,email,password,whatsapp,image,userid,bio,self,gender,age,
martial,religion,caste,sect,color,height,study,occup,income,nation,city)
Values ('$username','$email','$password','$whatsapp','$file','$userid','$bio','$self','$gender','$age','$martial',
'$religion','$caste','$sect','$color','$height','$study','$occup','$income','$nation','$city')";
$query_run = mysqli_query($con,$query);

    if($query_run){
        $_SESSION['success']="Account is Registered";
        header('location:index.php');
    }
    else{
        $_SESSION['status']="Account is not Registered";
        header('location:admin_register.php');
    }
}
?>