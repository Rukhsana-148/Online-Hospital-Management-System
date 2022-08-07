<?php
$name = $age = $dis = $place = $phone = $date=$con=$pass="";
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
  $name = $_POST['name'];
  $age = $_POST['age'];
  $dis = $_POST['dis'];
  $con = $_POST['con'];
  $phone = $_POST['number'];
  $place = $_POST['add'];
  $pass = $_POST['password'];
  $date = $_POST['date'];
}

if($name!=""&&$age!=0&&$dis!=""&&$con!=""&&$phone!=0&&$place!=""&&$pass!=0&&$date!=""){
$sql = "INSERT INTO `patient`(`Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Date`) VALUES ('$name','$age','$dis','$con','$place','$phone','$pass','$date')";
if ($conn->query($sql) === TRUE) {
  echo  '<script> 
   alert("Insert Successful") 
   </script>';
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?><?php include 'NavSite.html'?>

        <div class="row">
        <div class="col-sm-1"></div>
             <div class="col-sm-7">
                 <h4>Patients Form</h4>
                 <form method="post" action="">
                     <div class="form-group">
                        <label for="name">Name : </label>
                         <input type="text" name="name"  class="form-control" required="1" placeholder="Enter your name">
                     </div>
                     <div class="form-group">
                         <label for="age">Age : </label>
                         <input type="number" name="age"  class="form-control" required="1" placeholder="Enter your age">
                     </div>
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
                     <div class="form-group">
                        <label for="con">Patient Condition</label>
                        <select name="con" class="form-control">
                          <option disable="disabled" selected="selected">Select condition</option>
                          <option>Emergency</option>
                          <option>Normal</option>
                        </select>
                     </div>
                       <div class="form-group">
                        <label for="add">Address</label>
                         <input type="text" name="add"  class="form-control" required="1" placeholder="Enter your address">
                     </div>
                       <div class="form-group">
                        <label for="number">Phone Number</label>
                         <input type="number" name="number" class="form-control" required="1" placeholder="Enter your phone number">
                     </div>

                     <div class="form-group">
                        <label for="password">Password</label>
                         <input type="password" name="password" class="form-control" required="1" placeholder="Enter your password">
                     </div>
                       <div class="form-group">
                       <label for="date">Date</label>
                         <input type="date" id="e" name="date" class="form-control" required="1" placeholder="+880: Enter your phone number">
                       </div>
                       
                       <div class="form-group">
                         <input type="submit" name="submit" class="btn btn-success text-white" value="Submit">  <input type="reset" class="btn btn-success text-danger" value="Clear">
                     </div>
                 </form>
             </div>
</div>
        </div>
    </div>

</div>

</div>

<script>
    document.getElementById('e').value = new Date().toISOString().substring(0, 10);
    $(".patient").click(function(){
        $(".showPat").toggle(1500)
    })
    $(".doctor").click(function(){
        $(".showDoc").toggle(1500)
    })
    $(".menu").click(function(){
        $(".showLink").toggle(1500)
    });
   

    $( "form option:first-child" ).attr("disabled","disabled");
   
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    
</script>
  </body>


































   
    























































