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
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dis = $_POST['dis'];
    $phone = $_POST['phone'];
    $dn = $_POST['dName'];
    $dc = $_POST['dCon'];
}
if($name!=""&&$age!=0&&$dis!=""&&$phone!=""&&$dn!=""&&$dc!=""){
$insert = "INSERT INTO `appointment`(`Name`, `Contact`, `Age`, `Disease`, `D_Name`, `D_Contact`) VALUES ('$name','$phone','$age','$dis','$dn','$dc')";
if ($conn->query($insert) === TRUE) {
    echo  '<script> 
   alert("Insert Successful") 
   </script>';
 
 } 
}

?>
<?php include 'NavSite.html' ?>
<?php echo "Successful ".$_POST['name']?>
<?php include 'footer.html'?>