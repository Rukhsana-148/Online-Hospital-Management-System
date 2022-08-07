<?php
$name = $age = $dis = $place = $phone = $cont="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['page'])){
  $page  = $_GET['page'];
}
else{
  $page = 1;
}
$num_per_page = 5;
$start_from_page = ($page-1)*$num_per_page;


$query = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Room_No`, `Date` FROM `admit` limit $start_from_page, $num_per_page";
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
                <li><a href="patientDis.php">Discharge Patient</a></li>

            </ul>
        </div>
        <div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
        <div class="row">
                <div class="col-sm-6">
                <h5>Search Patient by : <span id="id" class="btn btn-dark text-white">Patient's Phone Number</span></h5>
           
          <form action="searchDis.php" id="IdS" method="post">
               <label for="cont" class="text-dark color">Search Patients by Phone Number</label>
               <input type="number" name="cont" placeholder="Search patient by contact" class="form-control w-50"/>
               <input type="submit" name="submit" value="Search" class="btn btn-dark text-white"/>
          </form>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                   
                </div>
               
            </div>

        <h4 class="text-center pb-5">Patient List</h4>
        <table class="table table-bordered table-striped table-dark text-white">
              <thead>
             
                      <thead>
                      <tr>
                          
                          <th>Patient's Name</th>
                          <th>Patient's Phone Number</th>
                          <th>Room No</th>
                          <th>Action</th>
</tr>
                          <thead>
                              <tbody>
                              <?php
                              
if($result==TRUE){

while($rows = mysqli_fetch_assoc($result))
{
 
  
?>
        <tr>
        
            <td><?php echo $rows['Name'];?></td>
            <td><?php echo "0".$rows['Phone Number'];?></td>
         <td><?php echo $rows['Room_No'] ;?></td>
    <td><form action="discharge.php" method="post">
                <input type="hidden" name="name" value="<?php echo $rows['Name'];?>"/>
                <input type="hidden" name="contact" value="<?php echo $rows['Phone Number'];?>"/>
                <input type="hidden" name="room" value="<?php echo $rows['Room_No'];?>"/>
                <input type="submit" name="discharge" value="Discharge" class="btn btn-primary text-white"/>
            </form>
        </td>
    <?php }
  

    }


else{
    echo "error";
}
?>

            
  </tr>
            



</tbody>

  </table>
  <?php
           $per_query = "SELECT `Name`, `Mobile`, `Phone`, `Room_No`, `Taka` FROM `payment`";
           $per_result = mysqli_query($conn, $per_query);
           
           $total_record  = mysqli_num_rows($per_result);
        
           $total_page = $total_record/$num_per_page;
          for($i=1;$i<=$total_page;$i++){
            echo "<a href='patientDis.php?page=".$i."' class='btn btn-primary text-white'>$i</a>";
          }
       ?>

       
</div>
</div>

</div>
        </div>
        </div>
        </div>
</div>
<?php include 'footer.html' ?>