<?php
	include "UserDataHandler.php";
	
	session_start();
	
	$id = $_POST["id"];
	$password = $_POST["password"];
	$d = substr($id, 0, 1);

	$dataHandler = new UserDataHandler;
	$serverName = "localhost";
	$username = "root";
	$pass = "";
	$dbName = "HMS";
	$conn = new mysqli($serverName, $username, $pass, $dbName);
	$dataHandler->log($password);

	if($d == "A"){
		//$data = $dataHandler->readJSON("../database/admins.json");
		$query = "select * from Admins where id='".$id."' and password='".$password."'";
		$result = $conn->query($query);
		
		$dataHandler->log($password);
		
		if($result->num_rows > 0)
		{
			$_SESSION["error"] = "";
			$_SESSION["id"] = $id;
			header("Location: ../view/dashboard.php");
			exit();
		}
		
		/*foreach($data as $entry)
		{
			if($entry["id"] == $id && $entry["password"] == $password)
			{
				$_SESSION["error"] = "";
				$_SESSION["user"] = $id;
				header("Location: ../view/home.php");
				exit();
			}
		}*/

		$_SESSION["error"] = "Wrong login credentials";
		header("Location: ../view/login.php");
		exit();
	}
	else if($d == "D"){
		// $data = $dataHandler->readJSON("../database/doctors.json");
		// foreach($data as $entry)
		// {
		// 	if($entry["id"] == $id && $entry["password"] == $password)
		// 	{
		// 		$_SESSION["error"] = "";
		// 		$_SESSION["user"] = $id;
		// 		header("Location: ../view/dashboard.php");
		// 		exit();
		// 	}
		// }

		$query = "select * from doctors where id='".$id."' and password='".$password."'";
		$result = $conn->query($query);
		
		if($result->num_rows > 0)
		{
			$_SESSION["error"] = "";
			$_SESSION["id"] = $id;
			$data = $result->fetch_assoc();
			$query = "insert into logs(id,uname,email) values('".$id."','".$data["uname"]."','".$data["email"]."')";
			$result = $conn->query($query);

			header("Location: ../view/dashboard.php");
			exit();
		}

		$_SESSION["error"] = "Wrong login credentials";
		header("Location: ../view/login.php");
		exit();
	}
	else if($d == "N"){
		$query = "select * from Nurses where id='".$id."' and password='".$password."'";
		$result = $conn->query($query);
		
		if($result->num_rows > 0)
		{
			$_SESSION["error"] = "";
			$_SESSION["id"] = $id;
			$query = "insert into logs(id) values('".$id."')";
			$result = $conn->query($query);
			
			header("Location: ../view/dashboard.php");
			exit();
		}

		$_SESSION["error"] = "Wrong login credentials";
		header("Location: ../view/login.php");
		exit();
		/*$data = $dataHandler->readJSON("../database/nurse.json");
		foreach($data as $entry)
		{
			if($entry["id"] == $id && $entry["password"] == $password)
			{
				$_SESSION["error"] = "";
				$_SESSION["user"] = $id;
				header("Location: ../view/home.php");
				exit();
			}
		}*/
	}


	//Code for rest of the user goes here


	else
	{
		$_SESSION["error"] = "Wrong login credentials";
		header("Location: ../view/login.php");
		exit();
	}
?>