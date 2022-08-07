<?php
$name = $age = $dis = $place = $phone = $date="";
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
    $search = $_POST['search'];
}
$query = "SELECT `Name`, `Contact`, `Password`, `Degree`, `Specialist`, `Location`, `Time` FROM `doctor_ad` WHERE  `Specialist` = '$search'";
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
<link rel="stylesheet" href="Pres.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<script src="app.js"></script>

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
                <span class="back"><a href="doctorList.php"><i class="fas fa-angle-left"></i></a><a href="User.php"><i class="fas fa-arrow-alt-circle-left"></i></a><a href="index.php"><i class="fas fa-home"></i></a></span>
            </div>
        </div>

        <div class="homePage">
            <div class="row">

                <div class="col-sm-2 showLink">
                    <ul>
                        <li class="patient">Patient Site</li>
                        <div class="showPat">
                            <ul>
                                <li> <a href="patients.php">Patient's Registration</a></li>
                                <li> <a href="infoLog.php">Your Profile</a></li>

                                <li><a href="patientList.php"> Admitted Patient's List</a></li>
                                <li><a href="payment-form.php">Payment Form</a></li>
                            </ul>
                        </div>
                        <li class="doctor">Doctor's Site</li>
                        <div class="showDoc">
                            <ul>
                                <li><a href="doctorList.php">Doctor List</a></li>

                                <li>Doctor Profile
                                    <ul>
                                        <li><a href="logDoc.php">Login Before Update</a></li>
                                        <li><a href="dLog.php">Login After Update</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </ul>
                </div>
                <div class="col-sm-10">
    <div class="row  pt-5 dList">
       
        <div class="col-sm-12">
            <h3 class="text-center text-white mt-4">Doctor List</h3>
          
           
          <table class="table table-bordered table-striped table-dark text-white">
              <thead>
                  <tr>
                     
                      <th>Doctor's Name</th>
                      <th>Specialist</th>
                      <th>Degree</th>
                      <th>Current Job Location</th>
                      <th>Visiting Time</th>
                      <th>Action</th>
                  </tr>

              </thead>
              <tbody>
              <?php
if($result==TRUE){
$si = 1;
while($rows = mysqli_fetch_assoc($result))
{
?>
     <tr>

     
     <td><?php echo $rows['Name'];?></td>
     <td><?php echo $rows['Specialist']; ?></td>
     <td><?php echo $rows['Degree']; ?></td>
     <td><?php  echo $rows['Location']; ?></td>
     
     <td><?php echo $rows['Time']; ?></td>
     <td>
        <form action="appoint.php" method="post">
         <input type="hidden" name="contact" value="<?php echo $rows['Contact']; ?>"/>
         <input type="submit" name="appoint" value="Appointment" class="btn btn-primary text-white"/>
        </form>
     </td>


  </tr>

                 <?php }
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
<script>
         $(".patient").click(function(){
        $(".showPat").toggle(1500)
    })
    $(".doctor").click(function(){
        $(".showDoc").toggle(1500)
    })
    $(".menu").click(function(){
        $(".showLink").toggle(1500)
       
    });

</script>
    
<?php include 'footer.html' ?>