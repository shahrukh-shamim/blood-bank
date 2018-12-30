<?php
require_once ("constants.php");
require_once ("session.php");
require_once ("connection.php");
require_once ("functions.php");
include ("header.php");
 ?> 


<!-- Top menu on small screens -->
<a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">&#9776;</a>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- // header -->
  <div class="w3-container" style="margin-top:0px" id="showcase">
    <h1 class="w3-jumbo"><b>Doners</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Available.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <?php if (isset($_SESSION['flash']["contact_us_status"])): ?>
    <div class="alert alert-primary">
      <p style="text-align: center;"><?php echo $_SESSION['flash']["contact_us_status"] ?></p>
    </div>
  <?php endif ?>
  <?php if (isset($_SESSION['flash']["be_a_donor_status"])): ?>
    <div class="alert alert-primary">
      <p style="text-align: center;"><?php echo $_SESSION['flash']["be_a_donor_status"] ?></p>
    </div>
  <?php endif ?>
  <?php if (isset($_SESSION['flash']["allready_exist_status"])): ?>
    <div class="alert alert-primary">
      <p style="text-align: center;"><?php echo $_SESSION['flash']["allready_exist_status"] ?></p>
    </div>
  <?php endif ?>
  <?php if (isset($_SESSION['flash']["insert_status"])): ?>
    <div class="alert alert-primary">
      <p style="text-align: center;"><?php echo $_SESSION['flash']["insert_status"] ?></p>
    </div>
  <?php endif ?>
   
  <!-- Doners -->
  <!-- The Team -->
  <div class="w3-row-padding">
<?php 
//Form Value Get.
if (isset($_POST['search'])) {
  $address = $conn->real_escape_string ($_POST['Address']);
  $blood_group = $conn->real_escape_string ($_POST['Blood_Group']);
// Form Handling.
 if ($address==""|| $blood_group=="") {
   //echo "All Fields Are Required";
 }
//Form Validation.
  if (empty($address)) {
    $error1 = "Address Is Required";
  }
  if (empty($blood_group)) {
    $error1 = "Blood_Group Is Required";
  }
// Form Insertion.
  if (count($error1)==0) {
    $query1 = "SELECT * FROM 'blood_donor' WHERE address = '$address' AND blood_group = '$blood_group'";

    $data = $conn->query($query1);
   
   if($data){
    set_flash("insert_status", "Check The Result");
   }else{
    set_flash("insert_status", "Your Result Has Been Failed");
   }
  }
}


 ?>    

 <?php

      $all_donors = get_all_donors();
      if ($all_donors)
      {
        while ($row = $all_donors->fetch_assoc())
        {
?>
            <div>
              <a href="profile.html">
                <div class="w3-col m4 w3-margin-bottom">
                  <div class="w3-light-grey">
                    <div class="w3-container">
                      <p class="w3-opacity"><?php echo $row["user_name"] ?></p>
                      <p class="w3-opacity"><?php echo $row["father_name"] ?></p>
                      <p class="w3-opacity"><?php echo $row["age"] ?></p>
                      <p class="w3-opacity"><?php echo $row["weight"] ?></p>
                      <p class="w3-opacity"><?php echo $row["phone"] ?></p>
                      <p class="w3-opacity"><?php echo $row["blood_group"] ?></p>
                      <p class="w3-opacity"><?php echo $row["address"] ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>

<?php
        }
      }
      else
      {

      }
    ?>
  </div>
  <!-- Modal Registration-->
  <p style="color: red;"><?php
   if (isset($error1)) {
     echo $error1;
   }

  ?></p>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-// header">
        <h5 class="modal-title" id="exampleModalLabel">Be A Donor..!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $base_url;  ?>be-a-donor.php" method="POST">
          <!--Display Validation Error Here -->
          <!--<?php  //include('error.php' ) ?>-->
            <div class="form-group">
              <label for="formGroupExampleInput">User Name:</label>
              <input type="text" name="User_Name" class="form-control" id="formGroupExampleInput" placeholder="Enter User Name" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Father Name:</label>
              <input type="text" name="Father_Name" class="form-control" id="formGroupExampleInput" placeholder="Enter Father Name" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Age:</label>
              <input type="text" name="Age" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Age" required="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Weight:</label>
              <input type="text" name="Weight" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Weight" required="">
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
        
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input  type="submit" name="donor_btn" class="btn btn-primary"  value="Submit">
      </div>
      </form>
        
      </div>
    </div>
  </div>
</div>


<?php

//Form Value Get.
 if (isset($_POST['donor_btn'])) {
    $user_name = mysql_real_escape_string ($_POST['User_Name']);
    $father_name = mysql_real_escape_string ($_POST['Father_Name']);
    $age = mysql_real_escape_string ($_POST['Age']);
    $weight = mysql_real_escape_string ($_POST['Weight']);
    $phone = mysql_real_escape_string ($_POST['Phone']);
    $address = mysql_real_escape_string ($_POST['Address']);
    $blood_group = mysql_real_escape_string ($_POST['Blood_Group']);
// Form Handling.
    if ($user_name==""|| $father_name==""|| $age==""|| $weight==""|| $phone==""|| $address==""|| $blood_group=="") {
      echo "All Fields Are Required";
    }   
  //Form Validation.
  if (empty($user_name)) {
    $error1 = "User Name Is Required";
  }
  elseif (empty($father_name)) {
    $error1 = "Father Name Is Required";
  }
  elseif (empty($age)) {
    $error1 = "Age Is Required";
  }
  elseif (empty($weight)) {
    $error1 = "Weight Is Required";
  }
  elseif (empty($phone)) {
    $error1 = "Phone Is Required";
  }
  elseif (empty($address)) {
    $error1 = "Address Is Required";
  }
  elseif (empty($blood_group)) {
    $error1 = "Blood Group Is Required";
  }
  // Form Insertion.
  if (count($error1) == 0) {
  
 $query = "INSERT INTO `blood_donor`(`user_name`, `father_name`, `age`, `weight`, `phone`, `address`, `blood_group`) VALUES ( '".$user_name."', '".$father_name."', '".$age."',  '".$weight."', '".$phone."', '". $address."' , '". $blood_group."')";
 
   $data = mysqli_query($conn,$query);
   
   if($data){
    echo "successfully data inserted";
   }else{
    echo "Not successfully Inserted";
   }
 }
}
  
?>

  
  <!-- Contact -->
  <p style="color: red;"><?php
   if (isset($error2)) {
     echo $error2;
   }

  ?></p>
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to contact us? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="<?php echo $base_url ?>contact-us" method= "POST" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" name="contact_btn" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>


<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">All Rights Reserved</p></div>

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
<?php include ("footer.php"); ?>