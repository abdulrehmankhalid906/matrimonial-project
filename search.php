<?php
session_start();
include 'connection.php';

if(isset($_POST['find']))
{
    $gender = $_POST['gender'];
    $martial = $_POST['martial'];
    $caste = $_POST['caste'];
    $city = $_POST['city'];
    $status='';
    //SELECT * FROM `registerinfo` WHERE `gender`='Female' OR `status`='Single' OR `caste`='DNE' OR `city`='Rawalpindi';
    $search = "select * from registerinfo where gender='$gender' OR  martial='$martial' OR 
    caste='$caste' OR city='$city' order by id desc";
    $search = mysqli_query($con,$search);

    if(mysqli_num_rows($search)>0)
    {
        while($res = mysqli_fetch_assoc($search))
        {
            ?>
                <div class="table-responsive" style="border: 1px solid red;">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td rowspan="6"><img src="pic2.png" width="150px" alt="No Image" class="img-thumbnail"></td>
                                <td colspan="3"><b>Bio: </b><?php echo $res['bio'];?></td>
                                <td colspan="2"><b>Post: </b></td>
                            </tr>
                            
                            <tr>
                                <td><b>Self: </b><?php echo $res['self'];?></td>
                                <td><b>Gender: </b><?php echo $res['gender'];?></td>
                                <td><b>Age: </b><?php echo $res['age'];?></td>
                                <td rowspan="5"><a href="verify.php">Verifying</a></td>
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
                                <td><b>Income: </b><?php echo $res['income'];?></td>
                                <td><b>Nationalility: </b><?php echo $res['nation'];?></td>
                            </tr>

                            <tr>
                                <td><b>City: </b><?php echo $res['city'];?></td>
                                <td><b>Whatsapp:</b><p id="one"><?php echo $res['whatsapp'];?></p></td> 
                                <td></td>                         
                            </tr>
                
                            <?php
        }
    }
    else
        {
        echo "No Record Found";
        }
        ?>         
                        </tbody>
                    </table>
            
                </div>
        <?php
}
?>