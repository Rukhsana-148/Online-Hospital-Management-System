
<?php include 'header.html' ?>
<div class="container login">
<a href="index.php" class="btn btn-dark text-white">GO Back</a>
    <div class="row">
   
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form method="post" action="">
            <div class="form-group">
                 <label for="user">Admin</label>
                  <input type="text" name="user"  class="form-control" required="1" placeholder="Enter user name">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
             <input type="password" name="pass"  class="form-control" required="1" placeholder="Enter your address">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary text-white"/><input type="reset" class="btn btn-info text-white ml-5">
          </div>
           </form>
           <?php
$name = $pass = $user = $password= "";
if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $pass = $_POST['pass'];
}
$user = "hospital456";
$password = "12345";
if($name==$user&&$pass == $password){

    echo "<a href='listPatient.php' class='btn btn-dark text-whit mt-5'> See patient's Detailed</a>";
}
else{
    echo "<h5 class='text-danger'>Please enter the correct password and name to see patient details</h5>!";
}
?>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="icon mmt-5 text-center">
    <ul>
        <li><i class="fab fa-facebook"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-google"></i></li>
    </ul>

</div>
<div class=" bottom p-3 text-center">
    <p>Copyright<i class="fas fa-copyright "></i>2022 observed by <span>Rukhsana Khatun </span>
        <span>& Abdullah Al Galib</span>
    </p>
    <p>Dept. of Computer Science and Engineering</p>

</div>
</div>

<?php include 'footer.html' ?>