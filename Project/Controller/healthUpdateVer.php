<?php
	include "../model/healthUpdate.php";
	include "../controller/UserDataHandler.php";
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		
		$dataHandler = new UserDataHandler;
		$query = "INSERT INTO health(patId,patName,patGender,bloodPressure, heartBeat, pulse, diabetes) 
		VALUES ('".$_SESSION['patId']."', '".$_SESSION['patName']."','".$_SESSION['patGender']."','".$_SESSION['bloodPressure']."',
		'".$_SESSION['heartBeat']."','".$_SESSION['pulse']."','".$_SESSION['diabetes']."')";
		//$dataHandler->log($)
		
		if($dataHandler->insert($query))
		{	
			$_SESSION["msg"] = "Allocation completed!";
		}
		else
		{
			$_SESSION["msg"] = "Allocation failed!";
		}
		
		header("Location: ../view/healthUpdateForm.php");
		exit();
		
?>