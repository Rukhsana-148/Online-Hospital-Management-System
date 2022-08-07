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

$query = "SELECT `Name`, `Contact`, `Password`, `Degree`, `Specialist`, `Location`, `Time` FROM `doctor_ad`";
$result = mysqli_query($conn, $query);

?>
<?php include 'NavSite.html' ?>
<style>
    .color{
        font-size : 23px;
        font-weight : bold;
    }
</style>
    <div class="row  pt-5 dList">
        <div class="col-sm-12">
            <h3 class="text-center text-white mt-4">Doctor List</h3>
           <form action="search.php" method="post">
               <label for="search" class="text-white color">Search Doctors by Specialist</label>
               <input type="text" name="search" placeholder="Search doctor by specialist" class="form-control mb-3 w-50"/>
               <input type="submit" value="Search" name="submit" class="btn btn-primary text-white mb-5"/>
            </form>
           
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

  if($rows['Contact']!=0){

  
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