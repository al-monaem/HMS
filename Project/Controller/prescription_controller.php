<?php

	include "UserDataHandler.php";
	include "../Model/Prescription.php";

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		$dataHandler = new UserDataHandler;
		$data = file_get_contents("php://input");
		$data = json_decode($data, true);
		//$dataHandler->log($data);
		$apid = $data["ap_id"];
		$medlist = $data["med"];
		$dosage = $data["dos"];
		$remarks = $data["remarks"];
		//$Equipments =  $data["Equipments"];
		// $visitorData = count($_POST["med"]);
		/*
		$apid = $_POST["ap_id"];
		$medlist = $_POST["med"];
		$medlist = implode(",",$medlist);
		$dosage = $_POST["dos"];
		$dosage = implode(",",$dosage);
		$remarks = $_POST["remarks"];
		*/
		
		$query = "INSERT INTO prescriptiondetails(apid,meds,dosage) VALUES ('".$apid."', 
            '".$medlist."','".$dosage."')";
        $query2 = "UPDATE appointmentdetails SET visitstatus = 'yes', remarks = '".$remarks."', did = '".$_SESSION["id"]."' WHERE apid = '".$apid."'";  
        //$dataHandler->log($query2);     
        $query3 = "UPDATE billing SET amount='".$dataHandler->calculateFee($medlist)."' WHERE apid = '".$apid."'";

        if($dataHandler->insert($query) && $dataHandler->insert($query2) && $dataHandler->insert($query3))
		{
			echo '<small class="success">Successful</small>';
		}
		else
		{
			echo '<small class="success">Failed</small>';
			//$dataHandler->log($msg);
		}
/*

	if($_SESSION["ap_id"]=="" || $_SESSION["med1"]=="" || $_SESSION["med2"]=="" || $_SESSION["med3"]=="")
	{
		$_SESSION["error"] = "All fields are required!";

		header("Location: ../view/createprescription.php");
		exit();
	}

	else
	{	
    	//echo $_SESSION["med1"]; 
        $offset=6*60*60; //converting 6 hours to seconds.
        $dateFormat="d-m-Y"; //set the date format
        $timeNdate=gmdate($dateFormat, time()+$offset);
    
		$medlist = array($_SESSION["med1"],$_SESSION["med2"],$_SESSION["med3"]);
		//echo $_SESSION["med1"];
		$prescription = new Prescription($_SESSION["ap_id"],$medlist,$timeNdate);

		$dataHandler = new UserDataHandler;
		$file = "../Database/Prescription.json";
		
		$data = $dataHandler->readJSON($file);
		$data[] = $prescription;
		$dataHandler->writeJSON($file, $data);

		$_SESSION["error"] = "";
		$_SESSION["success"] = "Successful";
		*/
		//header("Location: ../view/createprescription.php"); //might need fix
		//exit();
	//}

?>