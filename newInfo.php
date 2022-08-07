<?php
$name = $age = $dis = $place = $phone = $date=$con = $count= "";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];
    $degree = $_POST['degree'];
    $special = $_POST['special'];
    $job = $_POST['job'];
    $time = $_POST['time'];
}
if($name!=""&&$contact!=""&&$password!=""&&$degree!=""&&$special!=""&&$job!=""&&$time!=""){
$insert = "INSERT INTO `doctor_ad`(`Name`, `Contact`, `Password`, `Degree`, `Specialist`, `Location`, `Time`) VALUES ('$name','$contact','$password','$degree','$special','$job','$time')";
$delete = "DELETE FROM `doctor` WHERE `Contact` = $contact";
if ($conn->query($insert) === TRUE && $conn->query($delete)) {
    echo  '<script> 
     alert("Insert Successful") 
     </script>';
  } else {
  echo "Error: " . $insert . "<br>" . $conn->error;
  }
  }
  
?>
<?php include 'NavSite.html'?>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        Name : <?php echo $_POST['name'];?>
        Contact : <?php echo $_POST['contact'];?>
        Password : <?php echo $_POST['pass'];?>
        Degree : <?php echo $_POST['degree'];?>
        Specialist : <?php echo $_POST['special'];?>
        Job Location: <?php echo $_POST['job'];?>
        Visiting Time : <?php echo $_POST['time'];?>

        
    </div>
    <div class="col-sm-4"></div>
</div>
<?php include 'footer.html'?>