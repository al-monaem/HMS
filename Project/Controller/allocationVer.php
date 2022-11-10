<?php
	include "../model/allocation.php";
	include "../controller/UserDataHandler.php";
	//session_start();
	
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
	
	/*$flag = false;
	$dataHandler = new UserDataHandler;
	
	if($_SESSION["pID"] == "" || $_SESSION["pName"] == "" || $_SESSION["type"] == "" || $_SESSION["allDateTime"] == "")
	{
		$_SESSION["error"] = "All fields are required to proceed!";
		$flag = true;
		header("Location: ../view/allocateNewPat.php");
		exit();
	}
	if ($_SESSION["type"] == "1")
	{
		if($_SESSION["floorNo"] == "" || $_SESSION["wardNo"] == "" || $_SESSION["bedNo"] == "")
		{
		$_SESSION["error"] = "Ward and bed no required";
		$flag = true;
		header("Location: ../view/allocateNewPat.php");
		exit();
		}
	}
	else if ($_SESSION["type"] == "2")
	{
		if($_SESSION["floorNo"] == "" || $_SESSION["cabbinNo"] == "")
		{
		$_SESSION["error"] = "Cabbin no required";
		$flag = true;
		header("Location: ../view/allocateNewPat.php");
		exit();
		}
	}
	
	else 
	{
		$flag = false;
		$data = $dataHandler->readJSON("../database/Allocation.json");
		foreach($data as $entry)
		{
			if($entry["bedNo"] == $bedNo || $entry["cabbinNo"] == $cabbinNo)
			{
				$_SESSION["error"] = "Cabbin or bed is already occupied";
				$flag = true;
			}
		}
	}
	
	if(!$flag)
	{
		$_SESSION["error"] = "";
		$allocation = new allocation($_SESSION["pID"], $_SESSION["pName"], $_SESSION["type"], $_SESSION["floorNo"], 
		$_SESSION["wardNo"], $_SESSION["bedNo"], $_SESSION["cabbinNo"], $_SESSION["allDateTime"]);
 
		$data = $dataHandler->readJSON("../database/Allocation.json");
		$data[] = $allocation;

		$dataHandler->writeJSON("../database/Allocation.json", $data);
	}
		header("Location: ../view/allocateNewPat.php");
		//session_unset();
		exit();*/
	$dataHandler = new UserDataHandler;
		
		$query = "INSERT INTO patientallocation(pid,pName,type,floorNo, wardNo, bedNo, cabinNo, allDateTime) 
		VALUES ('".$_SESSION['pID']."', '".$_SESSION['pName']."','".$_SESSION['type']."',
		'".$_SESSION['floorNo']."','".$_SESSION['wardNo']."','".$_SESSION['bedNo']."','".$_SESSION['cabinNo']."','".$_SESSION['allDateTime']."')";
		
        $dataHandler->log($query);
		
		if($dataHandler->insert($query))
		{	
			$_SESSION["msg"] = "Allocation completed!";
		}
		else
		{
			$_SESSION["msg"] = "Allocation failed!";
		}
		//$dataHandler->log($_SESSION["msg"]);
		header("Location: ../view/allocateNewPat.php");
		exit();
?>