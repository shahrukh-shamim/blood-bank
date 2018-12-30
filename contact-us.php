<?php
require_once ("constants.php");
require_once ("session.php");
require_once ("connection.php");
include ("functions.php");

$msg ="";
 // Form Value Get.
 if (isset($_POST['contact_btn'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
// Form Handling.
 if ($name==""|| $email==""|| $message=="") {
      echo "All Fields Are Required";
    }   
    
 // Form Validation.   
    if (empty($name)) {
        $error2 = "Name Is Empty";
    }
    elseif (empty($email)) {
      $error2 = "Email Is Empty";
    }
    elseif (empty($message)) {
      $error2 = "Message Is Empty";
    }
 // Form Insertion.  
 $query = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ( '".$name."', '".$email."', '".$message."')";
 
   $data = query($conn,$query);
   
   if($data){
    set_flash("contact_us_status", "successfully data inserted");
   }else{
    set_flash("contact_us_status", "Not successfully Inserted");
   }
  }
  
  header("location: index.php");
  
?>
