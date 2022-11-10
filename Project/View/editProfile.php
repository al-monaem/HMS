<?php

	include "Template.php";
	$isPost = false;
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
	if($d == "D")
	{
		    $query = "SELECT * FROM doctors where id='".$_SESSION["id"]."'";
    $data = $dataHandler->load($query);
    if($data==null)
	    {
	      echo "No data found!";
	    }
    else
	    {
	      while ($row = $data->fetch_assoc()) {
	        $_SESSION["uname"] = $row["uname"];
			$_SESSION["gender"] = $row["gender"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["password"] = $row["password"];
			$_SESSION["contact"] = $row["contact"];
			$_SESSION["address"] = $row["address"];
	      }
	    }
	}
	if($d == "A")
	{
		    $query = "SELECT * FROM admins where id='".$_SESSION["id"]."'";
    $data = $dataHandler->load($query);
    if($data==null)
	    {
	      echo "No data found!";
	    }
    else
	    {
	      while ($row = $data->fetch_assoc()) {
	        $_SESSION["uname"] = $row["uname"];
			$_SESSION["gender"] = $row["gender"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["password"] = $row["password"];
			$_SESSION["contact"] = $row["contact"];
			$_SESSION["address"] = $row["address"];
	      }
	    }
	}
	if($d == "N")
	{
		    $query = "SELECT * FROM nurses where id='".$_SESSION["id"]."'";
    $data = $dataHandler->load($query);
    if($data==null)
	    {
	      echo "No data found!";
	    }
    else
	    {
	      while ($row = $data->fetch_assoc()) {
	        $_SESSION["uname"] = $row["uname"];
			$_SESSION["gender"] = $row["gender"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["password"] = $row["password"];
			$_SESSION["contact"] = $row["contact"];
			$_SESSION["address"] = $row["address"];
	      }
	    }
	}
	
/*	if($d == "D")
	{
		$data = $dataHandler->readJSON("../database/Doctors.json");
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				
				$_SESSION["uname"] = $entry["uname"];
				$_SESSION["gender"] = $entry["gender"];
				$_SESSION["email"] = $entry["email"];
				$_SESSION["password"] = $entry["password"];
				$_SESSION["contact"] = $entry["contact"];
				$_SESSION["address"] = $entry["address"];
				
			}
		}
	}
	else if($d == "N")
	{
		$data = $dataHandler->readJSON("../database/Nurse.json");
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				$_SESSION["uname"] = $entry["uname"];
				$_SESSION["gender"] = $entry["gender"];
				$_SESSION["email"] = $entry["email"];
				$_SESSION["password"] = $entry["password"];
				$_SESSION["contact"] = $entry["contact"];
				$_SESSION["address"] = $entry["address"];
				
			}
		}
	}
	else if($d == "A")
	{
		$data = $dataHandler->readJSON("../database/Admins.json");
		foreach($data as $entry)
		{
			if($entry["id"] == $id)
			{
				$_SESSION["uname"] = $entry["uname"];
				$_SESSION["gender"] = $entry["gender"];
				$_SESSION["email"] = $entry["email"];
				$_SESSION["password"] = $entry["password"];
				$_SESSION["contact"] = $entry["contact"];
				$_SESSION["address"] = $entry["address"];
				
			}
		}
	}
	//$data = $dataHandler->readJSON("../Database/Nurse.json");
	//$data[] = $admin;
		

	if(!isset($_SESSION["uname"])){$_SESSION["uname"] = "";}
	if(!isset($_SESSION["email"])){$_SESSION["email"] = "";}
	if(!isset($_SESSION["password"])){$_SESSION["password"] = "";}
	if(!isset($_SESSION["contact"])){$_SESSION["contact"] = "";}
	if(!isset($_SESSION["address"])){$_SESSION["address"] = "";}
	if(!isset($_SESSION["gender"])){$_SESSION["gender"] = "";}
	//if(!isset($_SESSION["clear"])){$_SESSION["clear"] = "";}
	if(!isset($_SESSION["success"])){$_SESSION["success"] = "";}

	if(isset($_POST["update"]))
	{
		$_SESSION["error"]="";
		$isPost = true ;
		if(isset($_POST["id"]))
	    {
	        $_SESSION["id"]=$_POST["id"];
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
	    if(isset($_POST["contact"]))
	    {
	        $_SESSION["contact"]=$_POST["contact"];
	    }

	}
	if($isPost)
	{
		header("Location: ../controller/editprofile_controller.php");
		exit();
	}*/

?>

<head>
	<style>
		#form
		{
			border-style: ridge;
			margin-top: 150px;
			width: 60%;
			height: 100%;
		}
		.label
		{
			margin-right: 5px;
		}
		.text-box
		{
			width: 45%;
			height: 18px;
		}
		.btn
		{
			height: 30px;
			font-family: Georgia;
			margin-right: 10px;
			width: 80px;
		}
		input{
			font-family: Georgia;
		}
	</style>
</head>

<body>
	<center>
	<div>
		<div>
				<form id="form" class="card" action="../controller/editprofile_controller.php" method="post">
					<div style="text-align: center; margin-top: 20px" class="readonly">
					<h3 style="text-align: left; margin-bottom: 30px; margin-left: 60px">Edit Profile &nbsp;<button id="edit" name="edit">Edit</button> </h3>
					 
					</div>
 					<br>
					<?php
      				/*$var= "readonly";
					if (isset($_POST['edit']) ) {
					    $var= "";
					} else {
					    $var= "readonly";
					}*/
					?>
					<div style="display: table-cell;"> <!--works as td-->
						<div class="reg">
							<label class="label" for="id" style="margin-left: 89px;">ID:</label>
		            		<input class="text-box" type="text" name="id" id="id" value="<?php echo $id;?>" readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="username" style="margin-left: 40px">Username:</label>
		            		<input class="text-box" type="text" name="username" id="username" placeholder="Field is requied" value="<?php echo $_SESSION["uname"];?>" readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="password" style="margin-left: 43px;">Password:</label>
		            		<input class="text-box" type="password" name="password" id="password" placeholder="Field is requied" value="<?php echo $_SESSION["password"];?>"readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="gender" style="margin-left: 57px;">Gender:</label>
			            	<input class="text-box" type="text" name="gender" id="gender" value="<?php echo $_SESSION["gender"];?>" readonly>
			            	
						</div>
						<br>
						<br>
						<div class="reg">
                            <label class="label" for="address" style="margin-left: 50px;">Address:</label>
                            <input class="text-box" type="text" name="address" id="address" placeholder="Field is requied" value="<?php echo $_SESSION["address"];?>" readonly>
                        </div>
						<br>
					</div>
					<div style="display: table-cell;">
                        <br>
                        <img style="margin-left: 140px;" src="https://www.nilphamari.info/wp-content/uploads/2016/08/Sohel-Passport-Size-New-Photo.jpg" height="100" width="100" alt="Hospital-Management-System">
                        <div class="reg">
                            <label class="label" style="margin-left: 40px;">Phone Number:</label>
                            <input class="text-box" type="text" name="contact" id="contact" placeholder="Field is requied" value="<?php echo $_SESSION["contact"];?>"readonly>
                        </div>
                        <br>
                                                <div class="reg">
                            <label class="label" style="margin-left: 90px;">Email:</label>
                            <input class="text-box" type="text" name="email" id="email"  placeholder="Field is requied" value="<?php echo $_SESSION["email"];?>" readonly>
                        </div>
                        <br>
                    </div>
					<?php
						/*if($_SESSION["error"] != "")
						{
							echo '<span style="color:red; margin-left:20px">'.$_SESSION["error"].'</span>';
							echo "<br>";
						}
						else if($_SESSION["success"] != "")
						{
							echo '<span style="color:green; margin-left:20px">'.$_SESSION["success"].'</span>';
							echo "<br>";
						}*/
					?>
					<div style="width: 100%; margin: auto; text-align: center;">
						<button id="update" class="btn" name="update">Update</button>
						
					</div>
					<div id="msg"></div>
					<br>
				</form>
			
		</div>

	</div>
		</center>
    <script src="../JS/editP.js"></script>

</body>