<?php
session_start();
include_once('connection.php');
/*must login to view homepage*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Captain Marriage Center</title>
</head>
<body>
  <div class="user_header" style="">
    <div class="container text-center" style="">
      <?php
        if(isset($_SESSION['username'])){
        ?>
        Hello!<?php echo $_SESSION['username'];?>
        <?php
      }
      else{
        ?>
        <h5>Hello! Guest</h5>
        <?php 
      }
      ?>
      <!--hide button-->
      <?php
        if(!isset($_SESSION['username'])){
          ?>
          <script>
          $(document).ready(function(){
            $("#btnt").hide();
          });
          </script>
          <?php
        }
        else{
          ?>
            <a href="logout.php" id="btnt" class="btn btn-danger" id="dd">Logout</a>
          <?php 
        }
        ?>
    </div>
  </div>
  <!--Header-->
  <!--Header-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid black;">
  <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="img//logo.png"  title="Home Page" alt="Responsive Image" height="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="font-size: larger;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="font-size: larger;">About Us</a>
        </li>
        <li class="nav-item">
        <?php
            if(!isset($_SESSION['username'])){
            ?>
              <a class="nav-link" href="register.php" id="bt-reg" style="font-size: larger;">Register</a>
            <?php
            }
            else{
              ?>
              <script>
                $(document).ready(function(){
                  $("#bt-reg").hide();
                });
              </script>
              <?php
            }
          ?>
        </li>
        <li class="nav-item">          
          <?php
            if(!isset($_SESSION['username'])){
            ?>
              <a class="nav-link" href="login.php" id="bt-login" style="font-size: larger;">Login</a>
            <?php
            }
            else{
              ?>
              <script>
                $(document).ready(function(){
                  $("#bt-login").hide();
                });
              </script>
              <?php
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: larger;" href="user_update.php?id=<?php echo $res['id']?>">Edit Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">             
                    <?php
                    $id = $_GET['id'];
                    $query = "select * from registerinfo where id=$id";
                    $query = mysqli_query($con,$query);

                    $res = mysqli_fetch_assoc($query);
                    if(isset($_POST['update'])){

                        $id = $_GET['id'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

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
                        $whatsapp = $_POST['whatsapp'];
                    
                        /*Update Query*/
                        $updatequery = "update registerinfo set id=$id , username='$username', email='$email', password='$password', bio='$bio', self='$self', gender='$gender', age='$age', martial='$martial',
                        religion='$religion', caste='$caste', sect='$sect', color='$color', height='$height', study='$study', occup='$occup', income='$income', nation='$nation', city='$city', whatsapp='$whatsapp' where id=$id ";

                        mysqli_query($con,$updatequery);
                        if($query){
                        echo"Updated";
                        }
                        else
                        echo"cannot update";
                    }
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-8">
                    <label for="fname" class="form-label">User Name:</label>
                    <input type="text" class="form-control" value="<?php echo $res['username']?>" name="username">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" value="<?php echo $res['email']?>" name="email">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-8">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" value="<?php echo $res['password']?>" name="password">
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <label for="wtsapp" class="form-label">Whatsapp No:</label>
                        <input type="text" class="form-control" maxlength="20" name="whatsapp" value="<?php echo $res['whatsapp']?>" >
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Personal Info:</h2>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="bio" class="form-label">My Bio:</label>
                        <input type="text" maxlength="150" class="form-control" value="<?php echo $res['bio']?>" name="bio">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="pgi" class="form-label">You Are:</label>
                        <input type="text" class="form-control" name="self" value="<?php echo $res['self']?>">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12">
                        <label for="gender">Select Gender:</label>
                        <select class="form-select" id="gender" name="gender" value="<?php echo $res['gender']?>" >
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="age" class="form-label">Your Age:</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $res['age']?>" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="martial">Marital Status:</label>
                        <select class="form-select mt-2" name="martial" value="<?php echo $res['martial']?>" >
                        <option value="divorced">Divorced</option>
                        <option value="married">Married</option>
                        <option value="seprated">Separated</option>
                        <option value="single">Single</option>
                        <option value="widow">Widow(Husband Dead)</option>
                        <option value="widow">Widow(Wife Dead)</option>
                        </select>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="religion" class="form-label">Your Religion:</label>
                        <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $res['religion']?>" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="caste" class="form-label">Your Caste:</label>
                        <input type="text" class="form-control" id="caste" name="caste" value="<?php echo $res['caste']?>" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="sect" class="form-label">Your Sect:</label>
                        <input type="text" class="form-control" id="sect" name="sect" value="<?php echo $res['sect']?>" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="color" class="form-label">Select Your Color:</label>
                        <select class="form-select" name="color" value="<?php echo $res['color']?>" >
                        <option value="very fair">Very Fair</option>
                        <option value="fair">Fair</option>
                        <option value="normal">Normal</option>
                        <option value="dark">Dark</option>
                        </select>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="height" class="form-label">Height:</label>
                        <input type="text" class="form-control" id="height" value="<?php echo $res['height']?>" name="height" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="qualification" class="form-label">Your Qualification:</label>
                        <input type="text" class="form-control" id="qualification" value="<?php echo $res['study']?>" name="study" >
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-3 col-sm-12">
                        <label for="occupation" class="form-label">Your Occupation:</label>
                        <input type="text" class="form-control" id="occupation" name="occup" value="<?php echo $res['occup']?>" >
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="income" class="form-label">Your Income:</label>
                        <input type="text" class="form-control" id="inco" name="income" value="<?php echo $res['income']?>" >
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="nationality" class="form-label">Nationality:</label>
                        <input type="text" class="form-control" id="nationality" value="<?php echo $res['nation']?>" name="nation" >

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="city" class="form-label">Select Your City:</label>
                        <select class="form-select" name="city" value="<?php echo $res['city']?>" >
                        <option value="Islamabad">Islamabad</option>
                        <option value="Rawalpindi">Rawalpindi</option>
                        </select>
                        </div> 
                    </div>

                    <hr>     
                                                    
                    <!--row 9-->
                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto mt-2">
                            <button type="submit" class="btn btn-success" value="submit" name="update">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
include('include/user_footer.php');
?>  
</body>
</html>