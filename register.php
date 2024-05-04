<?php 
session_start();
include("include/user_header.php"); 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <!--main content-->
    <div class="area" style="background-color: silver;">
        <div class="container" style="background-color: white;">
            <div class="row">
                <form action="registerinfo.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Before you start(Important Points):</h2>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>Enter the complete and real details.</p>
                            <p>All fields are must require to fill them.</p>
                            <p>Currently! This platform is only for Rawalpindi and Islamabad Proposals. In future we will decide about other cities.</p>
                            <p>After filling the form please read again wheather if is something or wrong.</p>
                            <p>The new Updates will be appear on your main page.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Register:</h2>
                        </div>
                    </div>

                    <!--row 1-->
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="fname" class="form-label">User Name:</label>
                            <input type="text" class="form-control" name="username" placeholder="Abdullah">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="abc123@gmail.com" required>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="whatsapp" class="form-label">Your Whatsapp:</label>
                            <input type="text" class="form-control" placeholder="0300-8899333" id="whatsapp" maxlength="20" name="whatsapp" min="0" >
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="profile" class="form-label">Profile Picture:<small class="text-danger fw-bold"><i>(Optional)</i></small></label>
                            <input type="file" class="form-control" name="user_image" accept="image/*" id="image">
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <input type="hidden" class="form-control" name="userid" id="userid" value="<?php $a= rand(1111,9999); echo $a;?>">
                        </div>
                    </div>

                    <hr>

                    <!--row 2-->
                    <!--Personal Details:-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Personal Info:<small id="info" class="form-text text-muted">(Please fill the all entries)</small></h2>
                        </div>
                    </div>

                    <!--Row 3-->
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="bio" class="form-label">Description:</label>
                            <input type="text" placeholder="My Sister is M.A English good looking" maxlength="250" class="form-control" name="bio" >
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label for="pgi" class="form-label">You Are:</label>
                            <input type="text" placeholder="Parents/Guardian/Self" class="form-control" name="self" >
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <label for="status">Looking For:</label>
                            <select class="form-select mt-2" id="gender" name="gender" >
                                <option value="Female">Female</option>
                                <option value="Male" selected>Male</option>
                            </select>
                        </div>
                    </div>

                    <!--Row 4-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="age" class="form-label">Enter Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="27" min="0" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="martial">Marital Status:</label>
                            <select class="form-select mt-2" name="martial" >
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
                            <input type="text" class="form-control" id="religion" value="Islam" name="religion" >
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="caste" class="form-label">Your Caste:</label>
                            <input type="text" class="form-control" placeholder="Rajpoot" id="caste" name="caste" >
                        </div>
                    </div>

                    <!--row 5-->
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <label for="sect" class="form-label">Your Sect:</label>
                            <input type="text" class="form-control" placeholder="Suni/Shia" id="sect" name="sect" >
                        </div>
        
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="color" class="form-label">Select Your Color:</label>
                            <select class="form-select" name="color" >
                                <option value="very fair" selected>Very Fair</option>
                                <option value="fair">Fair</option>
                                <option value="normal">Normal</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
        
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="height" class="form-label">Height:</label>
                            <input type="text" class="form-control" placeholder="5 Feet 12 inches" id="height" name="height" >
                        </div>
        
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="qualification" class="form-label">Your Qualification:</label>
                            <input type="text" class="form-control" placeholder="Masters" id="qualification" name="study" >
                        </div>
                    </div>

                    <!--Row 6-->
                    <div class="row">

                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <label for="occupation" class="form-label">Your Occupation:</label>
                            <input type="text" class="form-control" placeholder="Engineer/Lawyer" id="occupation" name="occup" >
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <label for="income" class="form-label">Your Income:</label>
                            <input type="number" class="form-control" placeholder="PKR Ruppes 300000" id="inco" min="0" name="income" >
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <label for="nationality" class="form-label">Nationality:</label>
                            <input type="text" class="form-control" placeholder="Pakistani" id="nationality" name="nation" >

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="city" class="form-label">Select Your City:</label>
                            <select class="form-select" name="city" >
                                <option value="Islamabad" selected>Islamabad</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                            </select>
                        </div> 
                    </div>
                    <hr>
                    <!--row 9-->
                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary" value="submit" name="register">Register</button>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="reset" class="btn btn-secondary" value="Clear">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("include/user_footer.php"); ?>
</body>
</html>