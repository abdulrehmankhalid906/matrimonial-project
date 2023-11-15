<?php
session_start();
include ('connection.php');
//For User Login...
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check = "select * from registerinfo where email='$email' AND password ='$password'";
    $query = mysqli_query($con,$email_check);

    if(mysqli_num_rows($query) > 0){
        $res=mysqli_fetch_assoc($query);
        //if user is 0 Deactivated
        //if user is 1 Activated
        //if user is 2 Disable
        //if user is 3 Expired
        if($res['status']==1){
            $_SESSION['id'] = $res['id'];
            $_SESSION['username'] = $res['username'];
            header('location:home.php');
        }
        else if($res['status']==0){
            header('location:fee.php');
        }
        else if($res['status']==2){
            echo "Your Account is Blocked";
        }
        else{
            echo "Your Account is Expired";
        }
    }
    else{
        echo "Your Email or Password Incorrect";
    }
}
?>