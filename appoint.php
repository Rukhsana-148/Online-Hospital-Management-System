<?php
$name = $age = $dis = $place = $phone = $date=$con = $count= $cont =$dn=$dc="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['appoint'])){
    $cont = $_POST['contact'];
}

$query = "SELECT `Name`, `Contact` FROM `doctor_ad` WHERE `Contact` = $cont";
$result = mysqli_query($conn, $query);

?>
<?php include 'NavSite.html' ?>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h4>Appointment Request</h4>

        <form action="request.php" method="post">
            <?php 
        if($result==TRUE){

while($rows = mysqli_fetch_assoc($result))
{?>
 Patient Name : 
  <input type="text" name="name" placeholder="Enter your name" class="form-control"/>
  Age :   <input type="number" name="age" placeholder="Enter your age" class="form-control"/>
  <div class="form-group">
                        <label for="dis">Disease</label>
                         <select class="form-control" name="dis">
                          <option disable="disabled" selected="selected" >Select disease</option>
                          <option>Fever</option>
                               <option>Diabetes</option>
                               <option>Bronchitis</option>
                               <option>Allergies and Asthma</option>
                               <option>Heart Disease</option>
                               <option>Liver Disease</option>
                               <option>Cancer</option>
                               <option>Heart Disease</option>
                               <option>Typhoid</option>
                               <option>Common Cold</option>
                               <option>Malaria</option>
                         </select>
                     </div>
  Phone Number :   <input type="number" name="phone" placeholder="Enter your phone number" class="form-control"/>
  <input type="hidden" name="dName" value="<?php echo $rows['Name'];?>" class="form-control"/>
  <input type="hidden" name="dCon" value="<?php echo $rows['Contact'];?>" class="form-control"/>
      <input type="submit" name="send" value="Send Request" class="btn btn-primary text-white"/>
</form>
        <?php }
        }
        ?>
    </div>
    <div class="col-sm-4"></div>
</div>
<?php include 'footer.html' ?>