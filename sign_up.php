<?php
require_once ("constants.php");
require_once ("session.php");
require_once ("connection.php");
include ("functions.php");

 $user_name = "";
  $email = "";
  $phone = "";
  $address = "";
  $blood_group = "";
  $password = "";
  $error  = array();

// Form Value Get.
if (isset($_POST['sub_btn'])) {

    $user_name =  $conn->real_escape_string($_POST['User_Name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $phone =  $conn->real_escape_string($_POST['Phone']);
    $address =  $conn->real_escape_string($_POST['Address']);
    $blood_group =  $conn->real_escape_string($_POST['Blood_Group']);
    $password =  $conn->real_escape_string($_POST['Password']);

    // Form Validation.
   if (empty($user_name)) {
     array_push ($error , "User Name Is Required");
   }
   elseif (empty($email)) {
     array_push ($error , "Email Is Required");
   }
   elseif (empty($phone)) {
     array_push($error , "Phone Is Required");
   }
   elseif (empty($address)) {
     array_push($error , "Address Is Required");
   }
   elseif (empty($blood_group)) {
     array_push($error , "Blood Group Is Required");
   }
   elseif (empty($password)) {
     array_push($error , "Password Is Required");
   }
   // Form Handling.
    if ($user_name==""|| $email==""|| $phone==""|| $address==""|| $blood_group==""|| $password=="") {
      echo "All Fields Are Required";
    } 
   //Form Insertion.
   if (count($error) == 0) {
    if (allready_exist ($email)) {
      set_flash("allready_exist_status", "This Email Is Already Exist");
      header("location: index.php");
  
    } 
    
     $password = md5($password);
   $query = "INSERT INTO sign_up ( `user_name`, `email`, `phone`, `address`, `blood_group`, `password`) VALUES ( '".$user_name."', '".$email."', '".$phone."',  '".$address."', '".$blood_group."', '". $password."')";
   $data = mysqli_query($conn,$query);

   if ($data) {
     set_flash("allready_exist_status", "Data Inserted Successfully!");
      header("location: index.php");
   }
   else{
    set_flash("allready_exist_status", "Data Not Inseted!");
      header("location: index.php");
   }
   $_SESSION['user'] = mysqli_insert_id($conn);
   $_SESSION['emai'] = $email;
   // header("location : index.php");
  }
  // For Login Value Get Form.
  if (isset($_POST['log_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
// For Login Validation Form.
    if (empty($email)) {
      $error = "Email Is Required";
    }
    elseif (empty($password)) {
      $error = "Password Is Required";
    }
       // Form Handling (Log In).
    if ($email==""||  $password=="") {
      echo "All Fields Are Required";
    } 
    // For Login Form Insertion.
    if (count($error) == 0) {
      $password = md5($password);
      $query1 = "SELECT * FROM sign_up WHERE email = '$email' AND password = '$password'";
      $result = $conn->query($query1);
      if (mysqli_num_rows($result) == 1) {
        $ro = mysqli_fetch_assoc($result);
        $id = $ro['id'];
        $email = $ro ['email'];
        
        $_SESSION['user'] = $id;
        $_SESSION['email'] = $email;
        // header('locaton : index.php');
      }
      else{
         array_push($error, "Wrong Email/Password Combination");
      }
    }
  }

}
 //Logout.
 if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['email']);
   // header('locaton : index.php');
}
  ?>
 