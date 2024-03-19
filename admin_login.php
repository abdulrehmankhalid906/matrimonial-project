<?php
session_start();
include'connection.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "SELECT * from admin WHERE email='$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $database_pass = $email_pass['password']; 

        $_SESSION['name'] = $email_pass['name'];

        if($database_pass===$password){
            echo "Login Successfully";
            header('location:index.php');
        }else
        ?>
        <script> alert("Incorrect Password") </script>
        <?php
    }else
        ?>
        <script> alert("Incorrect Email") </script>
        <?php
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>

.btn-success, .btn-danger{
    width: 100%;
}

</style>
</head>
<body>
    <?php
    include('include/user_header.php');
    ?>
  <!--Main Areaa-->
    <div class="area" style="background-color: silver;">
        <div class="container" style="background-color: white;">
            <div class="row">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2>Admin Login(Only For Admin):</h2>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <p>Enter email and password.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <label for="Email" class="form-label" style="font-weight: bold;">Email:</label>
                            <input type="email" name="email" class="form-control" required>

                            <label for="Password" class="form-label" style="font-weight: bold;">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success my-3" name="login" value="submit">Login Admin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
    include('include/user_footer.php');
    ?>
</body>
</html>