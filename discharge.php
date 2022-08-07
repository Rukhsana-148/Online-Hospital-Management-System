<?php
$name = $age = $dis = $place = $phone = $cont=$paid="";
$sum=0;
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['discharge'])){
    $name = $_POST['name'];
    $cont = $_POST['contact'];
    $roin = $_POST['room'];
}
$room = "SELECT `Name`, `Mobile`, `Phone`, `Room_No`, `Taka` FROM `payment` WHERE `Mobile` = '$cont'";
$taka = "SELECT `Contact`, `Taka` FROM `taka` WHERE `Contact` = '$cont'";
$taka_res = mysqli_query($conn, $taka);
$result_room = mysqli_query($conn, $room);


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Hospital Management</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style/all.min.css">

<link rel="stylesheet" href="style/fontawesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="Main.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<script src="app.js"></script>
<style>
  
</style>
<body>
    <div class="container">
        <div class="upper">
            <div class="top">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="download.png">
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                        <nav>
                            <ul>
                                <li> <i class="fas fa-phone-alt"></i>01345-567821<br>01567-123456</li>
                                <li> <i class="fas fa-envelope"></i>hospital@gmail.com<br>service@gmail.com</li>
                                <li> <i class="fas fa-map-marker-alt"></i> Jashore Sadar<br>Jashore, Khulna, Bangladesh</li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="menubar">
            <span class="menu"><i class="fas fa-bars"></i></span>
                <span class="back"></a><a href="AdminMenu.php"><i class="fas fa-arrow-alt-circle-left"></i></a><a href="index.php"><i class="fas fa-home"></i></a></span>
            </div>
        </div>

        <div class="homePage ">
            
    <div class="row"> <div class="col-sm-3 showPat showLink ">
            <ul>
                <li><a href="listPatient.php">Patient Information</a></li>
                <li><a href="paymentList.php">Payment List</a></li>
                <li><a href="doctor.php">Doctor Registration</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="patientDis.php">Discharge Patient</a></li>

            </ul>
        </div>
        <div class="col-sm-9">
    <div class="row">
       <div class="col-sm-3"></div>
       <div class="col-sm-6">
       <h3 class="text-center">Payment Details of <?php echo $name; ?></h3>
       <?php
       if($taka_res==TRUE){
        while($rows = mysqli_fetch_assoc($taka_res)){
            $total = $rows['Taka'];
            echo "<button class='btn btn-primary text-white mb-5'> Total Taka : ".$total."</button></br>";
          
       }
       }?>

       <?php
       if($result_room==TRUE){
        $total_paid = 0;
        $count =0;
        while($rows=mysqli_fetch_assoc($result_room)){?>
           <?php $paid = $rows['Taka'];
           $count++;
            echo "<button class='btn btn-info text-white mb-2'>Paid : ".$paid."</button>";
            $total_paid = $total_paid+$paid;
            echo "<br><button class='btn btn-info text-white mb-2'> Total Paid : ".$total_paid."</button>";
            $res = $total-$total_paid; 
            echo "<br><button class='btn btn-success text-white mb-2'>Rest amount of money : ".$res."</button>";
            ?>
           <?php if($res==0){?>
            <form action="final.php" method="post">
                <input type="hidden" value="<?php echo $rows['Name']; ?>" name="name"/>
                <input type="hidden" value="<?php echo $rows['Mobile']; ?>" name="contact"/>
                <input type="hidden" value="<?php echo $rows['Room_No']; ?>" name="room"/>
                <input type="submit" value="Now Discharge" name="final" class="btn btn-primary text-white mb-5"/>
            </form>
                
           <?php }else{
                echo "<br><button class='btn btn-danger text-white mb-5'>Not Possible</button></br>";
            }
        }
    }
       ?>
            
         
           
            


       </div>
       <div class="col-sm-3"></div>
      




</div>
</div>
</div>