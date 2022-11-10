<?php

	include "UserDataHandler.php";
	include "../Model/Avl_Info.php";

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		$dataHandler = new UserDataHandler;
		$data = file_get_contents("php://input");
		$data = json_decode($data, true);

		$availdate = $data["availdate"];
		$availTime = $data["availTime"];
		$query = "INSERT INTO availableinfo(did,availdate,availTime) VALUES ('".$_SESSION["id"]."', 
            '".$availdate."','".$availTime."')";
        if($dataHandler->insert($query))
		{
			echo '<small class="success">Successful</small>';
		}
		else
		{
			echo '<small class="success">Failed</small>';
			//$dataHandler->log($msg);
		}
	/*if($_SESSION["availdate"]=="" || $_SESSION["availTime"]=="")
	{
		$_SESSION["error"] = "All fields are required!";

		header("Location: ../view/AvailableInfo.php");
		exit();
	}
	else
	{
		$avlinfo = new AvailableInfo($_SESSION["id"], $_SESSION["availTime"],$_SESSION["availdate"]);

		$dataHandler = new UserDataHandler;
		$file = "../Database/AvailableInfo.json";
		
		$data = $dataHandler->readJSON($file);
		$data[] = $avlinfo;
		$dataHandler->writeJSON($file, $data);

		$_SESSION["error"] = "";
		$_SESSION["success"] = "Time slot saved successfully";
		//echo '<span style="color:green; margin-left:20px">'.$_SESSION["success"].'</span>';
		header("Location: ../view/AvailableInfo.php"); //might need fix
		exit();
	}*/

?>