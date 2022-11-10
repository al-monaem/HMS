<?php
    include "../view/Template.php";

	$dataHandler->log($d);
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
	
	$dataHandler = new UserDataHandler;
		$d = substr($_SESSION["id"], 0, 1);

		//$data = file_get_contents("php://input");
		//$data = json_decode($data, true);
		/*$pName = $data["pName"];
		$nppassword = $data["nppassword"];
		$contact = $data["contact"];
		$contactNo = $data["contactNo"];	
		$npEmail = $data["npEmail"];
		$npAddress = $data["npAddress"];
		$occupation = $data["occupation"];
		$npGender = $data["npGender"];*/
		
		$pId = $_POST["pId"];
		$pName = $_POST["pName"];
		$nppassword = $_POST["nppassword"];
		$npContact = $_POST["npContact"];
		$contactNo = $_POST["contactNo"];	
		$npEmail = $_POST["npEmail"];
		$npAddress = $_POST["npAddress"];
		$occupation = $_POST["occupation"];
		$npGender = $_POST["npGender"];
		
		$dataHandler->log($pName);
		$dataHandler->log($nppassword);
		$dataHandler->log($npContact);
		$dataHandler->log($contactNo);
		$dataHandler->log($npEmail);
		$dataHandler->log($npAddress);
		$dataHandler->log($occupation);
		$dataHandler->log($npGender);
				
		        $query = "UPDATE patients SET uname= '".$pName."', password = '".$nppassword."', address = '".$npAddress."', 
				contact = '".$npContact."',contact2 = '".$contactNo."', email = '".$npEmail."' occupation = '".$occupation."', gender = '".$npGender."' WHERE id = '".$pId."'";  

		        if($dataHandler->insert($query))
				{
					echo '<small class="success">Successful</small>';
				}
				else
				{
					echo '<small class="success">Failed</small>';
					//$dataHandler->log($msg);
				}

	/*if($_SESSION["pName"]=="" || $_SESSION["nppassword"]=="" || $_SESSION["contact"]=="" || $_SESSION["contactNo"]=="" || 
		$_SESSION["email"]=="" || $_SESSION["address"]=="" ||$_SESSION["occupation"]=="" ||$_SESSION["gender"]=="")
	{
		$_SESSION["error"] = "All fields are required!";

		header("Location: ../view/editPatDetails.php");
		exit();
	}
	else
	{
		
		$dataHandler = new UserDataHandler;
		$q="UPDATE patients SET uname='".$_POST["pName"]."',
								password='".$_POST["nppassword"]."',
								contact='".$_POST["contact"]."',
								contact2='".$_POST["contactNo"]."',
								email='".$_POST["email"]."',
								address='".$_POST["address"]."',
								occupation='".$_POST["occupation"]."',
								gender='".$_POST["gender"]."'	
								where id = 'P-1'";
		$dataHandler->log($_POST["pName"]);
	}
		
		//$dataHandler = new UserDataHandler;
		//$file = "../Database/Admins.json";
		//$data = $dataHandler->readJSON($file);
		//$data[] = $admin;
		//$dataHandler->writeJSON($file, $update);

		//$_SESSION["error"] = "";
		//$_SESSION["success"] = "Details updated successfully";
		header("Location: ../view/editPatDetails.php");
		exit();
		
		/*$file = "../database/Doctors.json";
		$data = $dataHandler->readJSON("../database/Doctors.json");
		
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				$entry["pName"] = $_SESSION["pName"];
				$entry["nppassword"] = $_SESSION["nppassword"];
				$entry["contact"] = $_SESSION["contact"];
				$entry["contactNo"] = $_SESSION["contactNo"];
				$entry["email"] = $_SESSION["email"];
				$entry["address"] = $_SESSION["address"];
				$entry["occupation"] = $_SESSION["occupation"];
				$entry["gender"] = $_SESSION["gender"];
			}
			$update[] = $entry;*/

?>