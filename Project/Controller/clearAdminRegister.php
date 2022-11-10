<?php

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}

	{$_SESSION["uname"] = "";}
	{$_SESSION["email"] = "";}
	{$_SESSION["password"] = "";}
	{$_SESSION["phone"] = "";}
	{$_SESSION["gender"] = "";}
	{$_SESSION["age"] = "";}
	{$_SESSION["fname"] = "";}
	{$_SESSION["mname"] = "";}
	{$_SESSION["lname"] = "";}
	{$_SESSION["nid"] = "";}
	{$_SESSION["address"] = "";}
	{$_SESSION["error"] = "";}

	if($_SESSION["clear"] != "")
	{
		$_SESSION["success"] = "";
		$_SESSION["error"] = "";
	}

	header("Location: ../view/registerAdmin.php");
	exit();

?>