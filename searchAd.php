<?php
$name="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "";
}
if(isset($_POST['submit'])){
    $cont = $_POST['cont'];
}


$query = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Room_No`, `Date` FROM `admit` WHERE `Phone Number` = $cont";

$result = mysqli_query($conn, $query);
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
                <span class="back"><a href="patientList.php"><i class="fas fa-angle-left"></i></a><a href="AdminMenu.php"><i class="fas fa-arrow-alt-circle-left"></i></a><a href="index.php"><i class="fas fa-home"></i></a></span>
            </div>
        </div>

        <div class="homePage ">
            
    <div class="row"> <div class="col-sm-3 showPat showLink ">
            <ul>
                <li><a href="listPatient.php">Patient Information</a></li>
                <li><a href="patientList.php"> Admitted Patient's List</a></li>
                <li><a href="paymentList.php">Payment List</a></li>
                <li><a href="doctor.php">Doctor Registration</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="patientDis.php">Discharge Patient</a></li>

            </ul>
        </div>
        <div class="col-sm-9">

<div class="row">
        <div class="col-sm-12">
        
        <table class="table table-bordered table-striped table-dark text-white mb-5">
              <thead>
                  <tr>
                      
                      <th>Patient Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Room No.</th>
                      <th>Date</th>
                     
                  </tr>
              </thead>
              <tbody>
 <?php
if($result==TRUE){

 
while($rows = mysqli_fetch_assoc($result))
{
  ?>
  <h5 class="text-center text-white mb-5 mt-5 "><?php echo "Details of patient ".$rows['Name'];?></h5><?php
   
?>
                  <tr>
                      
                      <td><?php echo $rows['Name']; ?></td>
                      <td><?php echo $rows['Address']; ?></td>
                      <td><?php echo "0".$rows['Phone Number']; ?></td>
                      <td><?php echo $rows['Room_No']; ?></td>
                      <td><?php echo $rows['Date']; ?></td>
                  </tr>
                  <?php 
}

  
}

else{
    echo "Error";
}
?>

</tbody>
</table>
  
</div>
</div>

</div>

<?php include 'footer.html'?>
