<?php
	include "../model/blood.php";
	include "../controller/UserDataHandler.php";
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		
		$dataHandler = new UserDataHandler;
		$dnId = $dataHandler->generateDonorID();
		$query = "INSERT INTO blood(bid,dName,bGroup,dcontact, daddress, demail, dgender) 
		VALUES ('".$dnId."', '".$_SESSION['dName']."','".$_SESSION['bGroup']."','".$_SESSION['dcontact']."',
		'".$_SESSION['daddress']."','".$_SESSION['demail']."','".$_SESSION['dgender']."')";
		
		if($dataHandler->insert($query))
		{	
			$_SESSION["msg"] = "Allocation completed!";
		}
		else
		{
			$_SESSION["msg"] = "Allocation failed!";
		}
		header("Location: ../view/bloodEntry.php");
		exit();
		
	/*if($_SESSION["dName"] == "" || $_SESSION["bGroup"] == "" || $_SESSION["dcontact"] == "" || $_SESSION["daddress"] == "" || $_SESSION["demail"] == "" || 
		$_SESSION["dgender"] == "")
	{
		$_SESSION["error"] = "All fields are required to proceed!";
		header("Location: ../view/bloodEntry.php");
		exit();
	}
	else
		$_SESSION["error"] = "";
		$dataHandler = new UserDataHandler;

		//$blood = new blood($_SESSION["dName"], $_SESSION["bGroup"], $_SESSION["dcontact"],
		//$_SESSION["daddress"], $_SESSION["demail"],$_SESSION["dgender"]);
		
		$data = $dataHandler->readJSON("../database/Blood.json");
		$data[] = $blood;

		$dataHandler->writeJSON("../database/Blood.json", $data);

		header("Location: ../view/bloodEntry.php");
		exit();
		*/
?>