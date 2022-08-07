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

if(isset($_POST['submit'])){
    $con = $_POST['contact'];
    $pass = $_POST['password'];
}

$sql = "SELECT `Name`, `Contact`, `Password` FROM `doctor` WHERE  `Contact` = $con ";
$result = mysqli_query($conn, $sql);
if($conn->query($sql) === TRUE){
    echo "";
}
?>
<?php include 'NavSite.html' ?>
<?php

    if($result==TRUE){
while($rows = mysqli_fetch_assoc($result))
{?>
     
     <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h4 class="mt-5 mb-5" >Update Your Information <?php echo $rows['Name'];?></h4> 
        <form action="newInfo.php" method="post">

        <div class="form-group">
            <label for="name"></label>
            <input type="hidden"  name="name" value="<?php echo $rows['Name'];?>" class="form-control w-50"/>
        </div>
        <div class="form-group">
            <label for="contact"></label>
            <input type="hidden"  name="contact" value="<?php echo $rows['Contact'];?>" class="form-control w-50"/>
        </div>
        <div class="form-group">
            <label for="pass">Set Password</label>
            <input type="show"  name="pass" value="<?php echo $rows['Password'];?>" class="form-control w-50"/>
        </div>

        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text"  name="degree" placeholder="Enter your Degree" class="form-control w-50"/>
        </div>
        <div class="form-group">
                        <label for="special">Disease</label>
                         <select class="form-control w-50" name="special">
                          <option disable="disabled" selected="selected" >Specialist</option>
                         
                               <option>Allergists/Immunologists</option>
                               <option>Anesthesiologists</option>
                               <option>Cardiologists</option>
                               <option>Critical Care Medicine Specialists</option>
                               <option>Dermatologists</option>
                               <option>Endocrinologists</option>
                               <option>Neurologists</option>
                               <option>Pulmonologists</option>
                               
                         </select>
                     </div>
        <div class="form-group">
            <label for="job">Job Location</label>
            <input type="text"  name="job" placeholder="Enter your job location" class="form-control w-50"/>
        </div>
        <div class="form-group">
            <label for="time">Visiting Time</label>
            <input type="text"  name="time" placeholder="Enter your visiting time" class="form-control w-50"/>
        </div>
        
       <input type="submit" name="update" class="btn btn-primary" value="Update"/>
     </form>
     <?php }
    }
?>
   
        </div>
        <div class="col-sm-2"></div>
     </div>
    


<?php include 'footer.html' ?>