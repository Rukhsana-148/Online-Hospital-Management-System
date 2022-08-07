<?php include 'NavSite.html' ?>
<div class="infoLog">
        <div class="row">
                <div class="col-sm-4"></div>
<div class="col-sm-4 main">
<h4 class="text-center">Log In</h4>
<form action="info.php" method="post">
    <div class="form-group">
        <label for="contact">Phone Number</label>
        <input type="number" name="contact" class="form-control" placeholder="Enter your phone number" required="1">
</div>
<div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" required="1">
</div>

<div class="form-group">
       <input type="submit" name="submit" value="Log In"class="btn btn-primary text-white"><a href="patients.php" class="btn btn-info text-white ml-4">Sign Up</a>
</div>
</form>
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