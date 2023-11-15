<?php
session_start();
include ('connection.php');
if(!isset($_SESSION['name'])){
  header('location:login.php');
}

include('include/admin_header.php');
include('include/admin_topbar.php');
include('include/admin_sidebar.php');

?>
  <div class="content-wrapper">
    <!--matbe add model here-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Add New User</h1>
          </div>

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admin will Add the new users:</h3>
                <br>
                  <div>
                    <?php 
                      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                      {
                          echo '<h2>'.$_SESSION['success'].'</h2>';
                          unset($_SESSION['success']);
                      }

                      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                      {
                          echo '<h4 class="text-danger fw-bold">'.$_SESSION['status'].'</h4>';
                          unset($_SESSION['status']);
                      }
                    ?>
                  </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <form action="adminreginfo.php" method="post" enctype="multipart/form-data">
                      <!--row 1-->
                      <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-8">
                          <label for="fname" class="form-label">User Name:</label>
                          <input type="text" class="form-control" name="username">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-8">
                          <label for="email" class="form-label">Email:</label>
                          <input type="email" class="form-control" name="email">
                        </div>
          
                        <div class="col-lg-4 col-md-4 col-sm-8">
                          <label for="password" class="form-label">Password:</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <label for="whatsapp" class="form-label">Your Whatsapp:</label>
                          <input type="text" class="form-control" placeholder="0300-8899333" id="whatsapp" name="whatsapp">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="profile" class="form-label">Profile Picture<small class="text-danger"><i>(Optional)</i></small></label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <label for="unique" class="form-label">Unique ID:</label>
                          <input type="text" class="form-control" name="userid" value="<?php $a= rand(100,9999); echo $a;?>">
                        </div>
                      </div>

                    <hr>

                    <!--row 2-->
                    <!--Personal Details:-->
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Personal Info:</h2>
                      </div>
                    </div>

                    <!--Row 3-->
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                          <label for="bio" class="form-label">My Bio:</label>
                          <input type="text" maxlength="150" class="form-control" name="bio">
                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="pgi" class="form-label">You Are:</label>
                        <input type="text"  class="form-control" name="self">
                      </div>

                      <div class="col-lg-3 col-md-4 col-sm-12">
                        <label for="gender">Select Gender:</label>
                        <select class="form-select" id="gender" name="gender">
                          <option value="Female">Female</option>
                          <option value="Male" selected>Male</option>
                        </select>
                      </div>
                    </div>

                    <!--Row 4-->
                    <div class="row">

                      <div class="col-lg-3 col-md-3 col-sm-12">
                          <label for="age" class="form-label">Enter Age:</label>
                          <input type="number" class="form-control" name="age" min="0" placeholder="26 Years">
                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="martial">Marital Status:</label>
                        <select class="form-select mb-0" name="martial">
                            <option value="divorced">Divorced</option>
                            <option value="married">Married</option>
                            <option value="seprated">Separated</option>
                            <option value="single" selected>Single</option>
                            <option value="widow">Widow(Husband Dead)</option>
                            <option value="widow">Widow(Wife Dead)</option>
                        </select>
                      </div>

                      <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="religion" class="form-label">Your Religion:</label>
                        <input type="text" class="form-control" id="religion" name="religion">
                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="caste" class="form-label">Your Caste:</label>
                        <input type="text" class="form-control" id="caste" name="caste">
                      </div>
                    </div>

                    <!--row 5-->
                    <div class="row">
                      <div class="col-lg-2 col-md-3 col-sm-12">
                          <label for="sect" class="form-label">Your Sect:</label>
                          <input type="text" class="form-control" id="sect" name="sect">
                      </div>
      
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="color" class="form-label">Select Your Color:</label>
                        <select class="form-select" name="color">
                            <option value="very fair" selected>Very Fair</option>
                            <option value="fair">Fair</option>
                            <option value="normal">Normal</option>
                            <option value="dark">Dark</option>
                        </select>
                      </div>
        
                      <div class="col-lg-3 col-md-3 col-sm-12">
                          <label for="height" class="form-label">Height:</label>
                          <input type="text" class="form-control" placeholder="5 Feet 12 inches" id="height" name="height">
                      </div>
      
                      <div class="col-lg-3 col-md-3 col-sm-12">
                          <label for="qualification" class="form-label">Your Qualification:</label>
                          <input type="text" class="form-control" id="qualification" name="study">
                      </div>
                    </div>

                    <!--Row 6-->
                    <div class="row">

                      <div class="col-lg-4 col-md-3 col-sm-12">
                        <label for="occupation" class="form-label">Your Occupation:</label>
                        <input type="text" class="form-control" id="occupation" name="occup">
                      </div>

                      <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="income" class="form-label">Your Income:</label>
                        <input type="number" class="form-control" id="inco" name="income" min="0">
                      </div>

                      <div class="col-lg-2 col-md-3 col-sm-12">
                        <label for="nationality" class="form-label">Nationality:</label>
                        <input type="text" class="form-control" placeholder="Pakistani" id="nationality" name="nation">

                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="city" class="form-label">Select Your City:</label>
                        <select class="form-select" name="city">
                            <option value="Islamabad" selected>Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                          </select>
                      </div> 
                    </div>
                    <hr>

                    <div class="row">
                      <div class="d-grid gap-2 col-6 mx-auto mt-2">
                        <button type="submit" class="btn btn-success" value="submit" name="register">Register</button>
                      </div>

                      <div class="d-grid gap-2 col-6 mx-auto mt-2">
                        <button type="reset" class="btn btn-danger" value="Clear">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include('include/admin_footer.php');
?>