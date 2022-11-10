<?php

	include "../controller/UserDataHandler.php";
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
		$id = $_GET['id'];
		//$dataHandler->log($id);

        $query = "DELETE FROM appointmentdetails WHERE apid ='".$id."'"; 
        			$dataHandler->log($query);

        if($dataHandler->del($query))
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
		header("Location: ../view/appt.php"); //might need fix
		exit();
	//}

?>