<?php

	include "UserDataHandler.php";
	$dataHandler = new UserDataHandler;

	// if(session_status() != PHP_SESSION_ACTIVE){
	// 	session_start();
	// }

	// $admin = new Admin($_POST["id"], $_POST["username"], $_POST["password"], $_POST["fname"], $_POST["mname"], $_POST["lname"], $_POST["address"], $_POST["email"], $_POST["gender"], $_POST["contact"], $_POST["nid"], $_POST["age"], $_SESSION["user"]);

	if(isset($_GET['function'])) {
	    if($_GET['function'] == 'load') 
	    {
	        $query = "select * from Admins ORDER BY SUBSTR(id FROM 1 FOR 2), CAST(SUBSTR(id FROM 2) AS UNSIGNED) DESC";

	        $result = $dataHandler->load($query);

	        if($result == null)
	        {
	        	
	        }
	        else
	        {
	        	$data = '<tr class="header" style="height:40px">
						<th style="width: 25%;">Username</th>
						<th style="width: 25%;">ID</th>
						<th style="width: 25%;">Registered By</th>
						<th style="width: 25%;"></th>
					</tr>';
	        	while ($row = $result->fetch_assoc()) {
					$data .= '<tr class="data">
						<td style="text-align:center;">'.$row["uname"].'</td>
						<td style="text-align:center">'.$row["id"].'</td>
						<td style="text-align:center">'.$row["registeredBy"].'</td>
						<td style="text-align:center"><button>View Profile</button></td>
					</tr>';
				}

				echo $data;
	        }
	    }
	}
	else
	{
		//$data = json_decode($_POST["d"]);
		$id = $_POST["id"];
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];
		$gender = $_POST["gender"];
		$age = $_POST["age"];
		$address = $_POST["address"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$nid = $_POST["nid"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$registeredBy = $_POST["registeredBy"];
		$userType = $_POST["userType"];
		$image = $_POST["image"];

		$query = "insert into admins values('".$id."','".$uname."','".$pass."','".$fname."','".$mname."','".$lname."','".$address."','".$email."','".$gender."','".$contact."','".$nid."','".$age."','".$registeredBy."','".$userType."','".$image."')";

		if($dataHandler->insert($query))
		{
			$msg = '<small class="success">User insertion successful</small>';
			echo $msg;
			// setcookie("msg", $msg, time() + 2, "/");
		}
		else
		{
			$msg = '<small class="error">Error inserting data</small>';
			echo $msg;
			// setcookie("msg", $msg, time() + 2, "/");
		}
	}

	// header("Location: ../view/registerAdmin.php");
	// exit();

?>