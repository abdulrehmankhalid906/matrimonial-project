<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid black;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="img//logo.png" title="Home Page" alt="Responsive Image" height="80"></a>
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
                    if (!isset($_SESSION['username'])) {
                    ?>
                        <a class="nav-link" href="register.php" id="bt-reg" style="font-size: larger;">Register</a>
                    <?php
                    } else {
                    ?>
                        <script>
                            $(document).ready(function() {
                                $("#bt-reg").hide();
                            });
                        </script>
                    <?php
                    }
                    ?>
                </li>

                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['username'])) {
                    ?>
                        <a class="nav-link" href="login.php" id="bt-login" style="font-size: larger;">Login</a>
                    <?php
                    } else {
                    ?>
                        <script>
                            $(document).ready(function() {
                                $("#bt-login").hide();
                            });
                        </script>
                    <?php
                    }
                    ?>
                </li>

                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['username'])) {
                    ?>
                        <a class="nav-link" id="bt-view" href="user_view.php" style="font-size: larger;">View Profile</a>
                    <?php
                    } else {
                    ?>
                        <script>
                            $(document).ready(function() {
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