<div class="user_header" style="background-color:grey; color:white;">
    <div class="container text-center" style="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php
                    if(isset($_SESSION['username']))
                    {
                    ?>
                    Hello! <b><?php echo $_SESSION['username'];?> </b>
                    <?php
                    }
                    else
                    {
                        ?>
                        <h5>Hello! Guest</h5>
                        <?php 
                    }
                ?>

                <!--hide button-->
                <?php
                    if(!isset($_SESSION['username']))
                    {
                    ?>
                    <script>
                    $(document).ready(function(){
                        $("#btnt").hide();
                    });
                    </script>
                    <?php
                    }
                    else
                    {
                    ?>
                        <a href="logout.php" id="btnt" class="btn btn-danger" id="dd">Logout</a>
                    <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</div>