<?php
session_start();
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Captain Marriage Center</title>
</head>
<body>
  <!--Header-->
  <?php
  include ('header_info.php');
  ?>
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
          <a class="nav-link active" aria-current="page" href="account_status.php" style="font-size: larger;">Account Status</a>
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
        <?php
            if(isset($_SESSION['username'])){
            ?>
              <a class="nav-link" id="bt-view" href="user_view.php" style="font-size: larger;">View Profile</a>
            <?php
            }
            else{
              ?>
              <script>
                $(document).ready(function(){
                  $("#bt-view").hide();
                });
              </script>
              <?php
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="area" style="background-color: whitesmoke;">
    <div class="container" style="background-color: white; border-left:1px solid black;border-right:1px solid black;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
              <h2 class="fw-bold">All Proposals:<small class="text-danger"><i>(Only Rawalpindi Proposals)</i></small></h2>
            </div>
        </div>

        <div class="row" style="boder: 1px solid gray;">
            <div class="col-lg-12 col-md-12 col-sm-10">
              <div class="table-responsive">
                <table class="table table-borderless">
                  <tbody>
                    <?php
                      $query = "select * from registerinfo Where city='rawalpindi'";
                      $query = mysqli_query($con,$query);

                      $num = mysqli_num_rows($query);
                      while($res = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                          <td rowspan="6"><img src="pic.png" alt="No Image" class="img-thumbnail"></td>
                          <td colspan="3"><b>Bio: </b><?php echo $res['bio'];?></td>
                        </tr>
                        
                        <tr>
                          <td><b>Self: </b><?php echo $res['self'];?></td>
                          <td><b>Gender: </b><?php echo $res['gender'];?></td>
                          <td><b>Age: </b><?php echo $res['age'];?></td>
                        </tr>

                        <tr>
                          <td><b>Martail Status: </b><?php echo $res['martial'];?></td>
                          <td><b>Religion: </b><?php echo $res['religion'];?></td>
                          <td><b>Caste: </b><?php echo $res['caste'];?></td> 
                        </tr>

                        <tr>
                          <td><b>Sect: </b><?php echo $res['sect'];?></td>
                          <td><b>Complexility: </b><?php echo $res['color'];?></td>
                          <td><b>Height: </b><?php echo $res['height'];?></td>  
                        </tr>

                        <tr>
                          <td><b>Occupation: </b><?php echo $res['occup'];?></td>
                          <td><b>Income: </b><?php echo $res['income'];?> <small class="text-danger" style="font-weight:bold;"><i>(Per Month)</i></small></td>
                          <td><b>Nationalility: </b><?php echo $res['nation'];?></td>
                        </tr>

                        <tr>
                            <td><b>City: </b><?php echo $res['city'];?></td>
                            <td><b>Whatsapp:</b>
                            <p>
                                <?php
                                    if(!isset($_SESSION['username'])){
                                    ?>
                                        <script>
                                        $(document).ready(function(){
                                        $(this).hide();
                                        });
                                        </script>
                                    <?php
                                    }
                                    else{
                                    ?>
                                        <?php echo $res['whatsapp'];?>
                                        <?php
                                    }
                                ?>    
                            </p>
                          </td>       
                          <td><b>Verification:</b>
                          <?php
                          if($res['status']==0){
                            echo "Progress";
                          }
                          else if($res['status']==1){
                            echo "Verified";
                          }
                          else{
                            echo "Not Verified";
                          }
                          ?>
                          </td>  
                        </tr>
                        <?php
                      }
                    ?>
                  </tbody>
                </table>
           </div>
        </div>
    </div>
    </div>
    </div>
    <?php 
    include('include/user_footer.php');
    ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>