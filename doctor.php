<?php
$name = $degree = $spe = $job = $visit = $con = $call = $video="";
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
   $name = $_POST['name'];
   
   $con = $_POST['cont'];
  
   $pass = $_POST['password'];

}
if($name!=""&&$con!=""&&$pass!=""){

   $sql = "INSERT INTO `doctor`(`Name`, `Contact`, `Password`) VALUES ('$name','$con','$pass')";
    
   if ($conn->query($sql) === TRUE) {
       echo  '<script> 
      alert("Insert Successful") 
      </script>';;
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
   }
    
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
                <li><a href="patientList.php"> Admitted Patient's List</a></li>
                <li><a href="paymentList.php">Payment List</a></li>
                <li><a href="doctor.php">Doctor Registration</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="patientDis.php">Patient Discharge</a></li>

            </ul>
        </div>
        <div class="col-sm-9">

  
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 class="text-center mt-5">Doctor's Registration</h4>
<form method="post" action="">
   <div class="form-input-group"> 
     <label for="id">Name</label>
         <input type="text" name="name" placeholder="Enter Doctor name" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="mobile">Contact No.:</label>
         <input type="number" name="cont" placeholder="Enter your contact no" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="password">Password:</label>
         <input type="password" name="password" placeholder="Enter password" required="1" class="form-control">
      </div>

      <div class="form-input-group mt-5"> 
         <input type="submit" name="submit" class="btn btn-info text-white mr-5"><input type="reset" class="btn btn-danger text-info">
      </div>
</form>

</div>
<div class="col-sm-2"></div>
</div>
</div>
<?php include 'footer.html' ?>