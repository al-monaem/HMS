<?php
	include "../model/NewPatient.php";
	include "../controller/UserDataHandler.php";
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		
	$dataHandler = new UserDataHandler;
		$pId = $dataHandler->generatePID();
		$query = "INSERT INTO patients(id,uname,email,contact, contact2, gender, password, occupation, address) 
		VALUES ('".$pId."', '".$_POST['pName']."','".$_POST['npEmail']."','".$_POST['npContact']."','".$_POST['contactNo']."',
		'".$_POST['gender']."','".$_POST['nppassword']."','".$_POST['occupation']."','".$_POST['npAddress']."')";

		header("Location: ../view/newPatientReg.php");
		exit();
		
	/*if($_SESSION["pName"] == "" || $_SESSION["nppassword"] == "" || $_SESSION["cPassword"] == "" || $_SESSION["email"] == "" || $_SESSION["contact"] == "" || 
		$_SESSION["contactNo"] == "" || $_SESSION["occupation"] == "0" || $_SESSION["address"] == "" || $_SESSION["gender"] == "" || $_SESSION["agree"] == "false")
	{
		$_SESSION["error"] = "All fields are required to proceed!";
		header("Location: ../view/newPatientReg.php");
		exit();
	}
	
	else if($_SESSION["cPassword"] == "" || $_SESSION["nppassword"] != $_SESSION["cPassword"])
	{
		$_SESSION["error"] = "Password and Confirm password must match!";
		header("Location: ../view/newPatientReg.php");
		exit();
	}
	
	else
	{
		$_SESSION["error"] = "";
		$dataHandler = new UserDataHandler;

		
		$newPatient = new newPatient($_SESSION["pName"], $_SESSION["nppassword"], $_SESSION["contact"],
		$_SESSION["contactNo"], $_SESSION["email"],$_SESSION["address"], $_SESSION["occupation"], $_SESSION["gender"]);
 
		$data = $dataHandler->readJSON("../database/NewPatient.json");
		$data[] = $newPatient;

		$dataHandler->writeJSON("../database/NewPatient.json", $data);
	}

		header("Location: ../view/redirect.php");
		exit();*/
?>