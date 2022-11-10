<?php

	include "Template.php";
	$isPost = false;
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
		$_SESSION["pId"]= "P-1";
		$q="select * from patients where id ='".$_SESSION["pId"]."'";
		$data = $dataHandler->load($q);
		if($data==null)
		{
			echo "No Patient found!";
		}
		else
		{
			while($row=$data->fetch_assoc())
			{
				$_SESSION["pID"] = $row["id"];
				$_SESSION["pName"] = $row["uname"];
				$_SESSION["nppassword"] = $row["password"];
				$_SESSION["npContact"] = $row["contact"];
				$_SESSION["contactNo"] = $row["contact2"];
				$_SESSION["npEmail"] = $row["email"];
				$_SESSION["npAddress"] = $row["address"];
				$_SESSION["occupation"] = $row["occupation"];
				$_SESSION["npGender"] = $row["gender"];
			}
		}
		

	/*if(!isset($_SESSION["pID"])){$_SESSION["pID"] = "";}
	if(!isset($_SESSION["pName"])){$_SESSION["pName"] = "";}
	if(!isset($_SESSION["nppassword"])){$_SESSION["nppassword"] = "";}
	if(!isset($_SESSION["contact"])){$_SESSION["contact"] = "";}
	if(!isset($_SESSION["contactNo"])){$_SESSION["contactNo"] = "";}
	if(!isset($_SESSION["email"])){$_SESSION["email"] = "";}
	if(!isset($_SESSION["address"])){$_SESSION["address"] = "";}
	if(!isset($_SESSION["occupation"])){$_SESSION["occupation"] = "";}
	if(!isset($_SESSION["gender"])){$_SESSION["gender"] = "";}
	if(!isset($_SESSION["success"])){$_SESSION["success"] = "";}

	if(isset($_POST["update"]))
	{
		$_SESSION["error"]="";
		$isPost = true ;
		if(isset($_POST["pID"]))
	    {
	        $_SESSION["pID"]=$_POST["pID"];
	    }
	    if(isset($_POST["pName"]))
	    {
	        $_SESSION["pName"]=$_POST["pName"];
	    }
	    if(isset($_POST["nppassword"]))
	    {
	        $_SESSION["nppassword"]=$_POST["nppassword"];
	    }
	    if(isset($_POST["contact"]))
	    {
	        $_SESSION["contact"]=$_POST["contact"];
	    }
	    if(isset($_POST["contactNo"]))
	    {
	        $_SESSION["contactNo"]=$_POST["contactNo"];
	    }
	    if(isset($_POST["email"]))
	    {
	        $_SESSION["email"]=$_POST["email"];
	    }
	    if(isset($_POST["address"]))
	    {
	        $_SESSION["address"]=$_POST["address"];
	    }
		if(isset($_POST["occupation"]))
	    {
	        $_SESSION["occupation"]=$_POST["occupation"];
	    }
		if(isset($_POST["gender"]))
	    {
	        $_SESSION["gender"]=$_POST["gender"];
	    }

	}
	if($isPost)
	{
		header("Location: ../controller/editPatDetailsController.php");
		exit();
	}*/

?>

<head>
	<style>
		#form
		{
			border-style: ridge;
			margin-top: 150px;
			width: 99%;
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
	<div style="display: table; width: 50%;text-align: center;">
		<div style="display: table-row;">
				<form id="form" action="../controller/editPatDetailsController.php" method="post">
					<div style="text-align: center; margin-top: 20px" class="readonly">
					<h3 style="text-align: left; margin-bottom: 30px; margin-left: 60px">Edit Patient Profile &nbsp;<button name="edit">Edit</button> </h3>
					 
					</div>
 					<br>
					<?php

					/*$var= "readonly";
					//$new= "i hate world";

					if (isset($_POST['edit']) ) {
					    $var= "";
					   // echo $var;
					} else {
					    //echo $var;
					    $var= "readonly";
					}*/
					?>
					<div style="display: table-cell;">
						<div class="reg">
							<label class="label" for="pID" style="margin-left: 89px;">ID:</label>
		            		<input class="text-box" type="text" name="pID" id="pID" value="<?php echo $_SESSION["pID"];?>" readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="pName" style="margin-left: 40px">Username:</label>
		            		<input class="text-box" type="text" name="pName" id="pName" placeholder="Field is requied" value="<?php echo $_SESSION["pName"];?>" readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="nppassword" style="margin-left: 43px;">Password:</label>
		            		<input class="text-box" type="password" name="nppassword" id="nppassword" placeholder="Field is requied" value="<?php echo $_SESSION["nppassword"];?>" readonly>
						</div>
						<br>
						<div class="reg">
							<label class="label" for="npContact" style="margin-left: 33px;">Contact No:</label>
			            	<input class="text-box" type="text" name="npContact" id="npContact" placeholder="Field is requied" value="<?php echo $_SESSION["npContact"];?>" readonly>
			            	
						</div>
						<br>
						<div class="reg">
							<label class="label" for="contactNo" style="margin-left: 10px;">Alternative Contact No:</label>
			            	<input class="text-box" type="text" name="contactNo" id="contactNo" placeholder="Field is requied" value="<?php echo $_SESSION["contactNo"];?>" readonly>
			            	
						</div>
						<br>
						
                        <div class="reg">   
							<label class="label" for="email" style="margin-left: 60px;">Email:</label>
                            <input class="text-box" type="text" name="npEmail" id="npEmail" placeholder="Field is requied" value="<?php echo $_SESSION["email"];?>" readonly>
                        </div>
                        <br>
                        <div class="reg">
                            <label class="label" for="address" style="margin-left: 50px;">Address:</label>
                            <input class="text-box" type="text" name="npAddress" id="npAddress" placeholder="Field is requied" value="<?php echo $_SESSION["address"];?>" readonly>
                        </div>
                        <br>
						<div class="reg">
                            <label class="label" for="occupation" style="margin-left: 40px;">Occupation:</label>
                            <input class="text-box" type="text" name="occupation" id="occupation" placeholder="Field is requied" value="<?php echo $_SESSION["occupation"];?>"readonly>
                        </div>
                        <br>
						<div class="reg">
                            <label class="label" for="gender" style="margin-left: 50px;">Gender:</label>
                            <input class="text-box" type="text" name="npGender" id="npGender" value="<?php echo $_SESSION["gender"];?>" readonly>
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
						<button class="btn" name="update">Update</button>
						
					</div>
					<br>
				</form>
			
		</div>

	</div>
		</center>
	<script src="../JS/editPatDetails.js"></script>
	<script src="../JS/jquery-3.6.0.js"></script>
	
</body>