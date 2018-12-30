<?php
require_once ("constants.php");
require_once ("session.php");
require_once ("connection.php");
require_once ("functions.php");
//include ("header.php");
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<title>Blood Bank</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link href="css/footer.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="index.php #contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
    <a href="#about_us" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
    
  </div>
</div>


<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Blood Bank</h1>
  <p class="w3-xlarge">Donate Blood Save Lifes</p>
  <form action="index.php" method="POST">
    <input type="text" name="address" placeholder="Area" required="">
    <input type="text" name="blood_group" placeholder="Blood_Group" required="">
    <input type="submit" name="search" value="Search">
  </form>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" data-toggle="modal" data-target="#exampleModal" >Register</button><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" data-toggle="modal" data-target="#login_modal">Login</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>It’s easy to become a blood donor...</h1>
      <h5 class="w3-padding-32">Giving blood is a quick and enriching way to give back to your community..</h5>

      <p class="w3-text-grey">By donating blood, you can help families who have been in accidents or experienced trauma, mothers experiencing labor complications, fathers having heart surgery, children undergoing chemotherapy treatments, premature babies trying to breathe with tiny lungs, or grandparents suffering from severe anemia.
In as little as few minutes, you can become someones unnamed, unknown, but all-important hero. Saving a life is noble work that starts very simply and easily..</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Who Can Donate Blood?</h1>
      <h5 class="w3-padding-10">1) Physically and Mentally Healthy Individual.</h5>
      <h5 class="w3-padding-10">2) Weight: 50 kg and above.</h5>
      <h5 class="w3-padding-10">3) Age: Above 17 years to 65 years..</h5>

       <h1>Those who Cannot Donate Blood</h1>
      <h5 class="w3-padding-10">If you have:</h5>
      <h5 class="w3-padding-10">1) History of Jaundice/Hepatitis.</h5>
      <h5 class="w3-padding-10">2) History of serious illnesses.</h5>
      <h5 class="w3-padding-10">3) Drug Addiction.</h5>
      <h5 class="w3-padding-10">4) Unsafe Sexual Practices.</h5>
      <h5 class="w3-padding-10">5) Major Surgery/Expected Surgery.</h5>
      <h5 class="w3-padding-10">6) Pregnancy.</h5>
    </div>
  </div>
</div>
<!-- Third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container" id="about_us">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About Us</h1>
      <h5 class="w3-padding-32">What we do?</h5>

      <p class="w3-text-grey">By donating blood, you can help families who have been in accidents or experienced trauma, mothers experiencing labor complications, fathers having heart surgery, children undergoing chemotherapy treatments, premature babies trying to breathe with tiny lungs, or grandparents suffering from severe anemia.
In as little as few minutes, you can become someones unnamed, unknown, but all-important hero. Saving a life is noble work that starts very simply and easily..</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: "The measure of life is not its duration, but its donation."</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>All Rights Reserved</a></p>
</footer>
<!--bootstrap modal windows -->
<!-- Modal login-->
<p style="color: red;"><?php
   if (isset($error1)) {
     echo $error2;
   }

  ?></p>
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
            <div class="form-group">
              <label for="formGroupExampleInput">Email:</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Email" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Password:</label>
              <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password" required="">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="log_btn" class="btn btn-primary">Login</button>

      </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal Registration-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $base_url ?>sign_up.php" method="post">
            <div class="form-group">
              <label for="formGroupExampleInput">User Name:</label>
              <input type="text" name="User_Name" class="form-control" id="formGroupExampleInput" placeholder="Enter User Name" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email:</label>
              <input type="text" name= "Email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Phone:</label>
              <input type="text" name="Phone" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Address:</label>
              <input type="text" name="Address" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Blood Group:</label>
              <input type="text" name="Blood_Group" class="form-control" id="formGroupExampleInput2" placeholder="Enter Blood Group" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Password:</label>
              <input type="Password" name="Password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password" required="">
            </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input  type="submit" name="sub_btn" class="btn btn-primary" value="Sign Up">
      </div>
      </form>
    </div>
  </div>
</div>
 
<script>


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>