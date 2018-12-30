<?php
	require_once ("constants.php");
	require_once ("session.php");
	require_once ("connection.php");

	function set_flash($key, $message)
	{
		if(!isset($_SESSION["flash"]))
			$_SESSION["flash"] = array();

		$_SESSION["flash"][$key] = $message;
	}

	function unset_flash()
	{
		echo "string";
		if(isset($_SESSION["flash"]))
			unset($_SESSION["flash"]);
	}

	function get_all_donors()
	{
		global $conn;
		$all_donors_query = $conn->query("SELECT * FROM blood_donor");
		return $all_donors_query;

	}
	function allready_exist($email)
	{
		global $conn;
		$allready_exist_query = $conn->query("SELECT * FROM sign_up WHERE email = '$email'");
		if ($allready_exist_query)
		{
			$total = $allready_exist_query->num_rows;

			if ($total==0) {
				return false;
			}
			return true;
		}
		else
		{
			return false;
		}
	}
	function insert($address,$blood_group) 
	{
       global $conn;
       $insert_query = $conn->query("SELECT * FROM blood_donor WHERE Address = '$address' AND Blood_group = '$blood_group'");
       if ($insert_query)
       {
       	$sum = $insert_query->num_rows;

       	if ($sum==0) {
       		return false;
       	}
       	 return true;
       }
       else 
       {
         return false;
       }
	}
?>