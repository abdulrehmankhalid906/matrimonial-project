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

<style>
  td{
    font-size: medium; 
  }
</style>
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
              if(!isset($_SESSION['id'])){
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
              if(!isset($_SESSION['id'])){
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
              if(isset($_SESSION['id'])){
              ?>
                <a class="nav-link" id="bt-view" href="view_profile.php" style="font-size: larger;">View Profile</a>
                
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

  <!--Carousel-->
  <?php
  include("include/user_swaper.php");
  ?>
  <!--marquee-->
  <marquee direction="left" behaviour="10px" style="background:indianred; color: white; font-weight: bold;">Welcome to the Captain Merraige Bearu. Let's find the better match.</marquee>
  <div class="area" style="background-color: whitesmoke;">

    <div class="container" style="background-color: white; border-left:1px solid black;border-right:1px solid black;">

        <!--Red Box-->
        <div class="container py-3 mt-0" style="background:#e3a0a0; border:1px solid black">

          <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
              <h2 style="text-align:center; font-family: serif;">Captain Marriage Center<br></h2><p style="text-align:center; font-size:17px; font-family: monospace;"><small>(Looking for Groom or Bride?)</small></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
              <p style="text-align:center; font-family: serif;"><b>For Querries/Contact Us.</b> 0341-5921294</p>
            </div>
          </div>
        </div>

        <!--Searh Menu-->
        <!--Searh Menu-->
        <div class="container py-5"> <!--make space up and down-->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Search Rishta's:</h2>
                 <!--Font weight needed-->
            </div>
          </div>

          <!--form for search-->
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="gender">Select Gender:</label>
                  <select class="form-select" aria-label="Default select example" name="gender">
                    <option value="">--------</option>
                    <option value="Male">Male</option>
                    <option value="Female" >Female</option>
                  </select>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="status">Martial Status:</label>
                  <select class="form-select" aria-label="Default select example" name="martial">
                    <option value="">--------</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="seprated">Separated</option>
                    <option value="widow">Widow/Husband Dead</option>
                    <option value="widow">Widower/Wife Dead</option>
                  </select>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="caste">Caste:</label>
                  <select class="form-select" aria-label="Default select example" name="caste">
                    <option value="">--------</option>
                    <option value="Abbasi">Abbasi</option>
                    <option value="Awan">Awan</option>
                    <option value="Malik">Malik</option>
                  </select>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="city">City:</label>
                  <select class="form-select" aria-label="Default select example" name="city">
                    <option value="">--------</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="d-grid gap-2 col-lg-6 col-md-6 col-sm-6">
                  <button type="submit" class="btn btn-success" value="Search" name="find">Search</button>
                </div>

                <div class="d-grid gap-2 col-lg-6 col-md-6 col-sm-6">
                  <button type="reset" class="btn btn-danger" value="Clear">Reset</button>
                </div>
              </div>
            </form>
          
          <hr>
          <!--Search Menu Backend-->
          <?php
          if(isset($_POST['find']))
          {
              $gender = $_POST['gender'];
              $martial = $_POST['martial'];
              $caste = $_POST['caste'];
              $city = $_POST['city'];
              //SELECT * FROM `registerinfo` WHERE `gender`='Female' OR `status`='Single' OR `caste`='DNE' OR `city`='Rawalpindi';
              $search = "select * from registerinfo where gender='$gender' OR  martial='$martial' OR caste='$caste' OR city='$city' order by id desc ";
              $search_query = mysqli_query($con,$search);
              ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <h2 class="text-success fw-bold">Search Results:</h2>
              </div>
            </div>
            <?php
            if(mysqli_num_rows($search_query)>0)
            {
              while($res = mysqli_fetch_assoc($search_query))
              {
                ?>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                          <td colspan="4"><h5 style="color:#d16565; font-weight:650;" ><?php echo $res['bio'];?></h5></td>
                        </tr>
                        <!--profile-->
                        <tr>
                        <td rowspan="5" style="width:150px;">
                            <span>
                                <?php
                                  if(!isset($_SESSION['id'])){
                                    ?>
                                    <script>
                                    $(document).ready(function(){
                                    $(this).hide();
                                    });
                                    </script>
                                    <?php
                                    if($res['gender']=="Male"){
                                      ?>
                                      <img src="img/logout_male.jpg" height="170px" width="170px" alt="Logout_Male">
                                      <?php
                                    }
                                    else{
                                      ?>
                                      <img src="img/logout_female.jpg" height="170px" width="170px" alt="Logout_Female">
                                      <?php
                                    }
                                  }
                                  else if(($res['user_image'] !=''))
                                  {
                                    ?>
                                    <img src="<?php echo "profile/".$res['user_image'];?>" height="170px" width="170px" alt="Image">      
                                    <?php
                                  }
                                  else
                                  {
                                    if($res['gender']=="Male")
                                    {
                                      ?>
                                      <img src="img/no_pic_male.jpg" height="170px" width="170px" alt="No_Pic_Male">
                                      <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="img/no_pic_female.jpg" height="170px" width="170px" alt="No_Pic_Female">
                                    <?php
                                    }
                                  }
                                  ?>
                              </span>
                            </td>
                          <td><b>Looking For: </b><?php echo $res['self'];?></td>
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
                          <span>
                            <?php
                              if(!isset($_SESSION['id'])){
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
                            </span>
                          </td>       
                          <td><b>Verification Status:</b>
                          <?php
                          if($res['status']==0){
                            ?>
                            <span class="text-danger fw-bold"><img src="img/pending.png" height="25px" width="25px"><i>Pending</i></span>
                            <?php
                          }
                          else if($res['status']==1){
                            ?>
                            <span class="text-success fw-bold"><img src="img/verified.png" height="25px" width="25px"><i>Verified</i></span>
                            <?php
                          }
                          else{
                            ?>
                            <span class="text-secondary fw-bold"><img src="img/block.png" height="25px" width="25px"><i>Blocked</i></span>
                            <?php
                          }
                          ?>
                          </td>  
                        </tr>

                        <tr>
                          <td colspan="3"><span class="fw-bold">Posted Time:</span>
                            <span> 
                            </b><?php echo $res['created'];?>
                            <i class="text-success fw-bold">ago</i>
                            </span>
                            <hr style="height:3px;">
                          </td>
                        </tr>
                            <?php
        }
    }
    else
        {
          ?>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
              <h3 class="text-danger"><?php  echo "No Record Found";?></h3>
            </div>
          </div>
          <?php
        }
        ?>         
                        </tbody>
                    </table>
            <hr>
                </div>
        <?php
}
?>

        <!--View All Rishtas-->
        <!--View All Rishtas-->
        <!--View All Rishtas-->
        <?php
        if(isset($_POST['find'])){
          ?>
          <script>
            $(document).ready(function(){
              $(".one").hide();
            });
          </script>
          <?php
        }
        else{
          ?>
          <div class="one">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <h2 class="fw-bold" style="color:#d16565;">All Proposals:</h2>
              </div>
            </div>

            <div class="row" style="border: 1px solid gray;">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <tbody>
                      <?php
                        $query = "select * from registerinfo order by id desc";
                        $display_query = mysqli_query($con,$query);

                        if(mysqli_num_rows($display_query) > 0){
                        while($res = mysqli_fetch_assoc($display_query)){
                        ?>
                          <tr>
                            <td colspan="4"><h5 style="color:#d16565; font-weight:650;" ><?php echo $res['bio'];?></h5></td>
                          </tr>
                          
                          <tr>
                            <td rowspan="5" style="width:150px;">
                            <span>
                                <?php
                                  if(!isset($_SESSION['id'])){
                                    ?>
                                    <script>
                                    $(document).ready(function(){
                                    $(this).hide();
                                    });
                                    </script>
                                    <?php
                                    if($res['gender']=="Male"){
                                      ?>
                                      <img src="img/logout_male.jpg" height="170px" width="170px" alt="Logout_Male">
                                      <?php
                                    }
                                    else{
                                      ?>
                                      <img src="img/logout_female.jpg" height="170px" width="170px" alt="Logout_Female">
                                      <?php
                                    }
                                  }
                                  else if(($res['user_image'] !=''))
                                  {
                                    ?>
                                    <img src="<?php echo "profile/".$res['user_image'];?>" height="170px" width="170px" alt="Image">      
                                    <?php
                                  }
                                  else
                                  {
                                    if($res['gender']=="Male")
                                    {
                                      ?>
                                      <img src="img/no_pic_male.jpg" height="170px" width="170px" alt="No_Pic_Male">
                                      <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="img/no_pic_female.jpg" height="170px" width="170px" alt="No_Pic_Female">
                                    <?php
                                    }
                                  }
                                  ?>
                              </span>
                            </td>
                            <td><b>Looking For: </b><?php echo $res['self'];?></td>
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
                            <span>
                              <?php
                                if(!isset($_SESSION['id'])){
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
                              </span>
                            </td>       
                            <td><b>Verification Status:</b>
                            <?php
                            if($res['status']==0){
                              ?>
                              <span class="text-danger fw-bold"><img src="img/pending.png" height="25px" width="25px"><i>Pending</i></span>
                              <?php
                            }
                            else if($res['status']==1){
                              ?>
                              <span class="text-success fw-bold"><img src="img/verified.png" height="25px" width="25px"><i>Verified</i></span>
                              <?php
                            }
                            else{
                              ?>
                              <span class="text-secondary fw-bold"><img src="img/block.png" height="25px" width="25px"><i>Blocked</i></span>
                              <?php
                            }
                            ?>
                            </td>  
                          </tr>

                          <tr>
                            <td colspan="3"><span class="fw-bold">Posted Time:</span>
                              <span> 
                              </b><?php echo $res['created'];?>
                              <i class="text-success fw-bold">ago</i>
                              </span>
                              <hr style="height:3px; margin:none;">
                            </td>
                          </tr>
                          <?php
                        }
                      }
                      ?>         
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
        </div>
      </div>
      <!--add footer-->
    </div>
  </div>
  <?php include 'include/user_footer.php'; ?>
</body>
</html>