<?php
	include "UserDataHandler.php";
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
	$dataHandler = new UserDataHandler;
	
	$dataHandler->log($_POST['username']);
	//$dataHandler->log($_SESSION['designation']);
	
	if ($_POST["designation"]=="doctor")
	{
		$dataHandler = new UserDataHandler;
		$DId = $dataHandler->generateDID();
		$query = "INSERT INTO doctors(id,uname,email,password, contact, address, gender, designation) 
		VALUES ('".$DId."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."',
		'".$_POST['contact']."','".$_POST['address']."','".$_POST['gender']."','".$_POST['designation']."')";
		
        //$dataHandler->log($query);
		
		if($dataHandler->insert($query))
		{	
			$_SESSION["msg"] = "Registration completed!";
		}
		else
		{
			$_SESSION["msg"] = "Registration failed!";
		}
		//$dataHandler->log($_SESSION["msg"]);
		header("Location: ../view/register.php");
		exit();
	}
	if ($_POST["designation"]=="nurse")
	{
		$dataHandler = new UserDataHandler;
		$NId = $dataHandler->generateNID();
		$query = "INSERT INTO nurses(id,uname,email,password, contact, address, gender, designation) 
		VALUES ('".$NId."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."',
		'".$_POST['contact']."','".$_POST['address']."','".$_POST['gender']."','".$_POST['designation']."')";
		$dataHandler->log($query);
		if($dataHandler->insert($query))
		{	
			$_SESSION["msg"] = "Registration completed!";
		}
		else
		{
			$_SESSION["msg"] = "Registration failed!";
		}
		//$dataHandler->log($_SESSION["msg"]);
		header("Location: ../view/register.php");
		exit();
		
		
		//session_start();

	/*if($_SESSION["uname"] == "" || $_SESSION["email"] == "" || $_SESSION["password"] == "" || $_SESSION["contact"] == "" || $_SESSION["address"] == "" ||
		$_SESSION["gender"] == "" || $_SESSION["designation"] == "0" || $_SESSION["agree"] == "false")
	{
		$_SESSION["error"] = "All field is required!";
		header("Location: ../view/register.php");
		exit();
	}

	else if($_SESSION["cpassword"] == "" || $_SESSION["password"] != $_SESSION["cpassword"])
	{
		$_SESSION["error"] = "Password and Confirm password must match!";
		header("Location: ../view/register.php");
		exit();
	}
	else
	{
		$_SESSION["error"] = "";
		$dataHandler = new UserDataHandler;

		//1 = doctor
		if($_SESSION["designation"] == "1"){
			//$file = ;
			//echo $file;
			$doctor = new Doctor($_SESSION["uname"], $_SESSION["password"], $_SESSION["email"], $_SESSION["contact"], $_SESSION["address"], $_SESSION["gender"]);

			$data = $dataHandler->readJSON("../Database/Doctors.json");
			$data[] = $doctor;

			$dataHandler->writeJSON("../Database/Doctors.json", $data);
		}
		//3 = Nurse
		else if($_SESSION["designation"] == "3"){
			$nurse = new Nurse($_SESSION["uname"], $_SESSION["password"], $_SESSION["email"], $_SESSION["contact"], $_SESSION["address"], $_SESSION["gender"]);

			$data = $dataHandler->readJSON("../Database/Nurse.json");
			$data[] = $nurse;

			$dataHandler->writeJSON("../Database/Nurse.json", $data);
		}

		header("Location: ../view/redirect.php");
		exit();
	}*/
	}
?>