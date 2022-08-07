<?php
$name = $age = $dis = $place = $phone = $date=$con = $count= $apmnt =$conP =  "";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $con = $_POST['contact'];
    $pass = $_POST['password'];
}


$sql = "SELECT `Name`, `Contact`, `Password`, `Degree`, `Specialist`, `Location`, `Time` FROM `doctor_ad` WHERE `Contact` = $con ";
$apmnt = "SELECT `Name`, `Contact`, `Age`, `Disease`, `D_Name`, `D_Contact` FROM `appointment` WHERE `D_Contact` = $con ";

$result = mysqli_query($conn, $sql);
$apt_res = mysqli_query($conn, $apmnt);

if($conn->query($sql) === TRUE){
    echo "";
}
if($conn->query($apmnt) === TRUE){
    echo "";
}

?>
<?php include 'NavSite.html'?>
<div class="row ml-5">
  
    <button class="profile btn btn-info tet-white mr-5">My Profile</button>
    <button class="appI btn btn-info tet-white">PAtient Appointment Request</button>
      
  </div>
<div class="prof">

<div class="profile-1">
      <img src="docI.jfif">
      <p>My Profile</p>
    </div>
<?php 
            if($result==TRUE){
while($rows = mysqli_fetch_assoc($result)){
  if($rows['Contact']==$con && $rows['Password']==$pass){
    ?>
   
    <nav>
      <ul>
  <li>  Name : <?php echo $rows['Name']; ?> </li><br>
  <li > Phone Number : <?php echo "0".$rows['Contact']; ?> </li><br>
  <li> Password : <?php echo $rows['Password']; ?></li><br>
  <li > Degree : <?php echo $rows['Degree'];?></li><br>
  <li > Specialist : <?php echo $rows['Specialist'];?></li><br>
  <li>Job Location : <?php echo $rows['Location'];?></li><br>
  <li>Visiting Time : <?php echo $rows['Time'];?></li><br>

    </ul>
    </nav>
<?php }
        }
        }
            else{
              echo "error first!";
            }
          ?>
        </div>
        <div class="app">

        <div class="appI-1">
      
      <p>My Appointment Request</p>
    </div>
<table class="table table-bordered table-dark table-striped aP">
  <thead>
    <th>Name</th>
    <th>Age</th>
    <th>Disease</th>
    <th>Action</th>
  </thead>
  <tbody>
  <?php 
            if($apt_res==TRUE){
while($rows = mysqli_fetch_assoc($apt_res)){
   
  if($rows['D_Contact']==$con){
   
    ?>
    <tr>
      <td><?php echo $rows['Name'];?></td>
      <td><?php echo $rows['Age'];?></td>
      <td><?php echo $rows['Disease'];?></td>
      <td>
        <form action="pres.php" method="post">
          <input type="hidden" name="cont" value="<?php echo $rows['Contact'];?>"/>
          <input type="submit" name="pres" value="Give Prescription" class="btn btn-primary text-white click"/>
        </form>
      </td>
    </tr>
   
    
<?php }
        }
        }
            else{
              echo "error first!";
            }?>
  </tbody>
</table>
          </div>
          </div>
          </div>
<script>
$('.app').hide();
$('.prof').hide();

$('.profile').click(function(){
  $('.app').hide();
  $('.prof').show();
  
 
})
$('.appI').click(function(){
  $('.app').show();
  $('.prof').hide();
 
 
})


</script>
<?php include 'footer.html'?>