<?php
	include "../Controller/UserDataHandler.php";

	//$dataHandler->log($d);
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		$dataHandler = new UserDataHandler;
		$d = substr($_SESSION["id"], 0, 1);

		$data = file_get_contents("php://input");
		$data = json_decode($data, true);
		$username = $data["username"];
		$password = $data["password"];
		$address = $data["address"];
		$contact = $data["contact"];	
		$email = $data["email"];
		if($d == "D")

			{
		        $query = "UPDATE doctors SET uname = '".$username."', password = '".$password."', address = '".$address."', contact = '".$contact."', email = '".$email."' WHERE id = '".$_SESSION["id"]."'";  

		        if($dataHandler->insert($query))
				{
					echo '<small class="success">Successful</small>';
				}
				else
				{
					echo '<small class="success">Failed</small>';
					//$dataHandler->log($msg);
				}
			}
			if($d == "A")

			{
		        $query = "UPDATE admins SET uname = '".$username."', password = '".$password."', address = '".$address."', contact = '".$contact."', email = '".$email."' WHERE id = '".$_SESSION["id"]."'";  

		        if($dataHandler->insert($query))
				{
					echo '<small class="success">Successful</small>';
				}
				else
				{
					echo '<small class="success">Failed</small>';
					//$dataHandler->log($msg);
				}
			}
			if($d == "N")

			{
		        $query = "UPDATE nurses SET uname = '".$username."', password = '".$password."', address = '".$address."', contact = '".$contact."', email = '".$email."' WHERE id = '".$_SESSION["id"]."'";  

		        if($dataHandler->insert($query))
				{
					echo '<small class="success">Successful</small>';
				}
				else
				{
					echo '<small class="success">Failed</small>';
					//$dataHandler->log($msg);
				}
			}

	/*if($_SESSION["uname"]=="" || $_SESSION["password"]=="" || $_SESSION["address"]=="" || $_SESSION["contact"]=="" || 
		$_SESSION["email"]=="")
	{
		$_SESSION["error"] = "All fields are required!";

		header("Location: ../view/editprofile.php");
		exit();
	}
	else
	{

	if($d == "D")

	{
		$file = "../database/Doctors.json";
		$data = $dataHandler->readJSON("../database/Doctors.json");
		
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				$entry["uname"] = $_SESSION["uname"];
				$entry["gender"] = $_SESSION["gender"];
				$entry["email"] = $_SESSION["email"];
				$entry["password"] = $_SESSION["password"];
				$entry["contact"] = $_SESSION["contact"];
				$entry["address"] = $_SESSION["address"];
			}
			$update[] = $entry;
		}
	}
	if($d == "A")

	{
		$file = "../database/Admins.json";
		$data = $dataHandler->readJSON("../database/Admins.json");
		
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				$entry["uname"] = $_SESSION["uname"];
				$entry["gender"] = $_SESSION["gender"];
				$entry["email"] = $_SESSION["email"];
				$entry["password"] = $_SESSION["password"];
				$entry["contact"] = $_SESSION["contact"];
				$entry["address"] = $_SESSION["address"];
			}
			$update[] = $entry;
		}
	}
		//$dataHandler = new UserDataHandler;
		//$file = "../Database/Admins.json";
		//$data = $dataHandler->readJSON($file);
		//$data[] = $admin;
		$dataHandler->writeJSON($file, $update);

		$_SESSION["error"] = "";
		$_SESSION["success"] = "User updated successfully";
		header("Location: ../view/editprofile.php");
		exit();

	}*/

?>