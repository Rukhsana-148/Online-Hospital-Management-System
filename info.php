<?php
$pass=$con = $result="";
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
$query = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Date` FROM `patient`";
$admit = "SELECT `Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Room_No`, `Date` FROM `admit` WHERE `Phone Number` = $con";
$prescript = "SELECT `Contact`, `Prescript` FROM `prescription` WHERE `Contact` = $con";

$result = mysqli_query($conn, $query);
$admit_result = mysqli_query($conn,$admit);
$pres_result = mysqli_query($conn, $prescript);

?>
<?php include 'NavSite.html'?>

<div class="information">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 infol">
            <img src="images.png">
            
        
          <?php 
            if($result==TRUE){
while($rows = mysqli_fetch_assoc($result)){
  if($rows['Phone Number']==$con && $rows['Password']==$pass){
    ?>
   
    <nav>
      <ul>
  <li>  Name : <?php echo $rows['Name']; ?> </li><br>
  <li > Age : <?php echo $rows['Age']; ?> </li><br>
  <li> Disease : <?php echo $rows['Disease']; ?></li><br>
  <li > Condition : <?php echo $rows['Conditions'];?></li><br>
  <li > Address : <?php echo $rows['Address'];?></li><br>
  <li> Phone Number : <?php echo "0".$rows['Phone Number'];?></li><br>
  
  <li> Date : <?php echo $rows['Date']; ?></li><br>
    </ul>
    </nav>
<?php }
        }
        }
            else{
              echo "error first!";
            }
          ?>
  <?php 
            if($pres_result==TRUE){
while($rows = mysqli_fetch_assoc($pres_result)){
  if($rows['Contact']==$con){
    ?>
   
    <nav>
      <ul>
  <li>  Prescription : <?php echo $rows['Prescript']; ?> </li><br>
    </ul>
    </nav>
<?php }
        }
        }
            else{
              echo "error first!";
            }
          ?>

<?php
            if($admit_result==TRUE){
while($rows = mysqli_fetch_assoc($admit_result)){
    ?>
   
    <nav>
      <ul>

      <li>  Name : <?php echo $rows['Name']; ?> </li><br>
  <li > Age : <?php echo $rows['Age']; ?> </li><br>
  <li> Disease : <?php echo $rows['Disease']; ?></li><br>
  <li > Condition : <?php echo $rows['Conditions'];?></li><br>
  <li > Address : <?php echo $rows['Address'];?></li><br>
  <li> Phone Number : <?php echo "0".$rows['Phone Number'];?></li><br>

  <li>  Room No : <?php echo $rows['Room_No']; ?> </li><br>
  
  <li> Admitted Date : <?php echo $rows['Date']; ?></li><br>
    </ul>
    </nav>
<?php }
        }
        
            
          ?>
        </div>
        <div class="col-sm-4">
          
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

<?php include 'footer.html'?>