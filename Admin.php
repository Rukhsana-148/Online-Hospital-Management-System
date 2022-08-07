<?php
$user = $pass = "";

if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
}



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
             
                <span class="back"></a><a href="index.php"><i class="fas fa-home"></i></a></span>
            </div>
        </div>

        <div class="homePage pd-5">
            
    <div class="row">
      
    
        <div class="col-sm-4">
         
        </div>
        <div class="col-sm-4">
        <h3 class="text-center">Admin Login</h3>
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
            <input type="submit" name="submit" class="btn btn-primary text-white"/><input type="reset" class="btn btn-info text-white ml-5"/>
             <button class="btn btn-info text-white h-75 alert">Sign Up</button
        </div>
           </form>
           <?php 
        if($user=='hospital456'&&$pass=='12345'){
  echo '<a href="AdminMenu.php" class="btn btn-dark text-white mt-4">You can now enter in the Admin site</a>';
}
?>
        </div>
  
        <div class="col-sm-4"></div>
    </div>
   
</div>
<script>
    $(".alert").click(function(){
        alert('No one can sign up as Admin!')
    })
</script>

<?php include 'footer.html'?>