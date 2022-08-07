<?php
$name = $age = $dis = $place = $phone = $date=$con = "";
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
    $page = $_GET['page'];
}
else{
    $page = 1;
}
$num_per_page = 05;
$start_from_page = ($page-1)*$num_per_page;
$query = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Room_No`, `Date` FROM `admit` limit $start_from_page , $num_per_page";

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
    .homePage{
        height : 630px;
        overflow: hidden;
    }
    .showLink{
        height : 630px;
        margin-bottom : 20px;
    }

    .image img{
        width : 400px;
        height : 400px;
        margin-left : 60%;
    }
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
            
    <div class="row">
        <div class="col-sm-3 showPat showLink ">
            <ul>
                <li><a href="listPatient.php">Patient Information</a></li>
                <li><a href="patientList.php"> Admitted Patient's List</a></li>
                <li><a href="paymentList.php">Payment List</a></li>
                <li><a href="doctor.php">Doctor Registration</a></li>
                <li><a href="appointment.php">Appointment Approve</a></li>
                <li><a href="patientDis.php">Discharge Patient</a></li>
             
            </ul>
        </div>
        <div class="col-sm-9 image">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                <h5>Search Patient by : <span id="id" class="btn btn-dark text-white">Patient's Phone Number</span></h5>
           
          <form action="searchAd.php" id="IdS" method="post">
               <label for="cont" class="text-dark color">Search Patients by Phone Number</label>
               <input type="number" name="cont" placeholder="Search patient by contact" class="form-control w-50"/>
               <input type="submit" name="submit" value="Search" class="btn btn-dark text-white"/>
          </form>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                   
                </div>
               
            </div>
            <h3 class="text-center text-white mt-4">Patient List</h3>
            
          <br>
          <table class="table table-bordered table-striped table-dark text-white">
              <thead>
                  <tr>
                     <th>Patient Name</th>
                    
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Room No</th>
                      <th>Date</th>
                      <th>Amount of Taka</th>
                  </tr>
              </thead>
              <tbody>
              <?php
if($result==TRUE){
  
while($rows = mysqli_fetch_assoc($result))
{
    if($rows['Name']!=''){
?>
                  <tr>
                     
                      <td><?php echo $rows['Name']; ?></td>
                      <td><?php echo $rows['Address']; ?></td>
                      <td><?php echo "0".$rows['Phone Number']; ?></td>
                      <td><?php echo $rows['Room_No']; ?></td>
                      <td><?php echo $rows['Date']; ?></td>
                      <td>
                      <form action="amount.php" method="post">
                        <input type="hidden" name="contact" value="<?php echo "0".$rows['Phone Number']; ?>"/>
                        <input type="submit" name="submit" value="Set Taka" class="btn btn-primary text-white"/>
                      </form>

                      </td>
                  </tr>
                  <?php }
}
}
else{
    echo "Error";
}


?>
             </tbody>
         </table>
         <?php
           $per_query = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Room_No`, `Date` FROM `admit`";
           $per_result = mysqli_query($conn, $per_query);
           
           $total_record  = mysqli_num_rows($per_result);
        
           $total_page = ceil($total_record/$num_per_page);
          for($i=1;$i<=$total_page;$i++){
            echo "<a href='patientList.php?page=".$i."' class='btn btn-primary text-white mr-2'>$i</a>";
          }
       ?>
       
       </div>
        </div>
</div>
<script>
    $('#IdS').hide();
    $('#dateS').hide();
    $('#id').click(function(){
        $('#IdS').show();
    $('#dateS').hide();
    });
    $('#date').click(function(){
        $('#IdS').hide();
    $('#dateS').show();
    })

   $('#leave').hide();
   $('#status').click(function(){
       $('#status').hide();
       $('#leave').show();
   })
  $('#trans').hide();
  $('#tran').click(function(){
      $('#trans').show();
  })
  
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
<?php include  'footer.html' ?>