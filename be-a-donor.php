<?php
require_once ("constants.php");
require_once ("session.php");
require_once ("connection.php");
include ("functions.php");

$msg ="";
 // Form Value Get.
    $user_name = $conn->real_escape_string ($_POST['User_Name']);
    $father_name = $conn->real_escape_string ($_POST['Father_Name']);
    $age = $conn->real_escape_string ($_POST['Age']);
    $weight = $conn->real_escape_string ($_POST['Weight']);
    $phone = $conn->real_escape_string ($_POST['Phone']);
    $address = $conn->real_escape_string ($_POST['Address']);
    $blood_group = $conn->real_escape_string ($_POST['Blood_Group']);
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
 
   $data = $conn->query($query);
   
   if($data){
    set_flash("be_a_donor_status", "You Have Succesfully Become A Blood Donor");
   }else{
    set_flash("be_a_donor_status", "Your Appliction Has Been Failed");
   }
 }


  header("location: index.php");
  print_r($_SESSION);
?>
