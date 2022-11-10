<?php

	include "Template.php";

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}

	$dataHandler = new UserDataHandler;
	$userId = $dataHandler->generateID("../Database/Admins.json");

	$isRegister = false;
	$isClear = false;
	if(!isset($_SESSION["userId"])){$_SESSION["userId"] = "";}
	if(!isset($_SESSION["uname"])){$_SESSION["uname"] = "";}
	if(!isset($_SESSION["email"])){$_SESSION["email"] = "";}
	if(!isset($_SESSION["password"])){$_SESSION["password"] = "";}
	if(!isset($_SESSION["contact"])){$_SESSION["contact"] = "";}
	if(!isset($_SESSION["gender"])){$_SESSION["gender"] = "";}
	if(!isset($_SESSION["age"])){$_SESSION["age"] = "";}
	if(!isset($_SESSION["fname"])){$_SESSION["fname"] = "false";}
	if(!isset($_SESSION["mname"])){$_SESSION["mname"] = "";}
	if(!isset($_SESSION["lname"])){$_SESSION["lname"] = "";}
	if(!isset($_SESSION["nid"])){$_SESSION["nid"] = "";}
	if(!isset($_SESSION["address"])){$_SESSION["address"] = "";}
	if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}
	if(!isset($_SESSION["clear"])){$_SESSION["clear"] = "";}
	if(!isset($_SESSION["success"])){$_SESSION["success"] = "";}

	if(isset($_POST["register"]))
	{
		$isRegister = true;
		$clear = false;
		$_SESSION["error"]="";
		if(isset($_POST["id"]))
	    {
	        $_SESSION["userId"]=$_POST["id"];
	    }
	    if(isset($_POST["username"]))
	    {
	        $_SESSION["uname"]=$_POST["username"];
	    }
	    if(isset($_POST["email"]))
	    {
	        $_SESSION["email"]=$_POST["email"];
	    }
	    if(isset($_POST["password"]))
	    {
	        $_SESSION["password"]=$_POST["password"];
	    }
	    if(isset($_POST["address"]))
	    {
	        $_SESSION["address"]=$_POST["address"];
	    }
	    if(isset($_POST["gender"]))
	    {
	        $_SESSION["gender"]=$_POST["gender"];
	    }
	    if(isset($_POST["age"]))
	    {
	        $_SESSION["age"]=$_POST["age"];
	    }
	    if(isset($_POST["contact"]))
	    {
	        $_SESSION["contact"]=$_POST["contact"];
	    }
	    if(isset($_POST["nid"]))
	    {
	        $_SESSION["nid"]=$_POST["nid"];
	    }
	    if(isset($_POST["fname"]))
	    {
	        $_SESSION["fname"]=$_POST["fname"];
	    }
	    if(isset($_POST["mname"]))
	    {
	        $_SESSION["mname"]=$_POST["mname"];
	    }
	    if(isset($_POST["lname"]))
	    {
	        $_SESSION["lname"]=$_POST["lname"];
	    }
	}
	if(isset($_POST["clear"]))
	{
		$isClear = true;
		$isRegister = false;
	}

	if($isRegister)
	{
		header("Location: ../controller/registerAdminController.php");
		exit();
	}
	if($isClear)
	{
		$_SESSION["clear"] = "clear";
		header("Location: ../controller/clearAdminRegister.php");
		exit();
	}
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/registerAdmin.css">
</head>

<body>
	<form method="post">
		<div class="container">
			<div class="container-1 card">
				<div class="header">
					<h3 style="margin-left: 30px; padding-top: 15px;">Admin Registration</h3>
					<hr>
				</div>
				<table style="margin-top: 30px">
					<tr>
						<td style="width: 50%;">
							<div class="reg">
								<label class="label" for="id" style="margin-left: 89px;">ID:</label>
			            		<input class="text-box" type="text" name="id" id="id" value="<?php echo $userId;?>" readonly>
							</div>
							<br>
							<div class="reg">
								<label class="label" for="username" style="margin-left: 40px">Username:</label>
			            		<input class="text-box" type="text" name="username" id="username" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" for="password" style="margin-left: 43px;">Password:</label>
			            		<input class="text-box" type="password" name="password" id="password" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" for="gender" style="margin-left: 57px;">Gender:</label>
			            		<select name="gender">
			            			<option value="0">Select</option>
			            			<option value="Male">Male</option>
			            			<option value="Female">Female</option>
			            		</select>
							</div>
							<br>
							<div class="reg">
								<label class="label" for="age" style="margin-left: 77px;">Age:</label>
			            		<input class="text-box" type="text" name="age" id="age" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" for="address" style="margin-left: 50px;">Address:</label>
			            		<textarea placeholder="Field is requied" name="address" form="form" style="resize: none;"></textarea>
							</div>
							<br>
						</td>
						<td>
							<div class="reg">
						<label class="label" style="margin-left: 70px;">First Name:</label>
	            		<input class="text-box" type="text" name="fname" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 53px;">Middle Name:</label>
			            		<input class="text-box" type="text" name="mname" placeholder="Field is optional">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 72px;">Last Name:</label>
			            		<input class="text-box" type="text" name="lname" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 66px;">National ID:</label>
			            		<input class="text-box" type="text" name="nid" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 46px;">Phone Number:</label>
			            		<input class="text-box" type="text" name="contact" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 103px;">Email:</label>
			            		<input class="text-box" type="text" name="email" placeholder="Field is requied">
							</div>
							<br>
						</td>
					</tr>
				</table>
				<?php
					if($_SESSION["error"] != "")
					{
						echo '<span style="color:red; margin-left:20px">'.$_SESSION["error"].'</span>';
						echo "<br>";
					}
					else if($_SESSION["success"] != "")
					{
						echo '<span style="color:green; margin-left:20px">'.$_SESSION["success"].'</span>';
						echo "<br>";
					}
				?>
				<div style="width: 100%; margin: auto; text-align: center;">
					<button class="btn text" name="register">Register</button>
					<button class="btn text" name="clear">Clear</button>
				</div>
			</div>
			<div class="container-2 card">
				<div class="header">
					<h3 style="margin-left: 30px; padding-top: 15px;">List of Admins</h3>
					<hr>
				</div>
				<div style="overflow-y: scroll; height: 320px;">
					<table style="width: 100%">
					<tr>
						<th style="width: 25%;">Username</th>
						<th style="width: 25%;">ID</th>
						<th style="width: 25%;">Registered By</th>
						<th style="width: 25%;"></th>
					</tr>
					<?php
						$data = $dataHandler->readJSON("../database/admins.json");
						foreach($data as $entry)
						{
							echo '<tr style="text-align:center; padding-bottom:10px">
									<td class="tdd">'.$entry["uname"].'</td>
									<td class="tdd">'.$entry["id"].'</td>
									<td class="tdd">'.$entry["registeredBy"].'</td>
									<td class="tdd"><button class="btn text">View Profile</button></td>
								</tr>';
						}
					?>
				</table>
			</div>
		</div>
	</form>
</body>