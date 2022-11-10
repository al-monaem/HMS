<?php

	include "UserDataHandler.php";
	include "../Model/otinitiate.php";

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}

	/*if($_SESSION["pid"]=="" || $_SESSION["otid"]=="" || $_SESSION["Equipments"]=="")
	{
		$_SESSION["error"] = "All fields are required!";

		header("Location: ../view/otinitiate.php");
		exit();
	}
	else
	{	
		//echo $_SESSION["med1"];
		/*
		foreach($_POST["Equipments"] as $value)
		{
			$eqmnt[] = array($value);
		}
		
		//$_SESSION["Equipments"] = $_POST["Equipments"];
		*/
		$dataHandler = new UserDataHandler;
		/*$pid =  $_REQUEST['pid'];
        $otid = $_REQUEST['otid'];
        $Equipments =  $_REQUEST["Equipments"];
        $Eq=implode("|",$Equipments);*/
		
		//$dataHandler->log($Eq);
		$data = file_get_contents("php://input");
		$data = json_decode($data, true);

		$pid = $data["pid"];
		$otid = $data["otid"];
		$Equipments =  $data["Equipments"];
        //$Eq=implode("|",$Equipments);
        $dataHandler->log($Equipments);
		//$dataHandler->log($eq);

        $query = "INSERT INTO ot(pid,otid,equipments) VALUES ('".$pid."', 
            '".$otid."','".$Equipments."')";
        if($dataHandler->insert($query))
		{
			echo '<small class="success">Successful</small>';
		}
		else
		{
			echo '<small class="success">Failed</small>';
			//$dataHandler->log($msg);
		}
		//$otinitiate = new Otinitiate($_POST["pid"],$_POST["otid"],$_POST["Equipments"]);

		//$dataHandler = new UserDataHandler;
		//$dataHandler->log($_SESSION["Equipments"]);
		//$file = "../Database/Otinitiate.json";

		//$data = $dataHandler->readJSON($file);
		//$data[] = $otinitiate;

		//$dataHandler->writeJSON($file, $data);
		//$_SESSION["error"] = "";
		//$_SESSION["success"] = "Successful";
		//$_SESSION["Equipments"]="";
		//header("Location: ../view/otinitiate.php"); //might need fix
		//exit();
	//}

?>