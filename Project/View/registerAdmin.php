<?php
	include "Template.php";

	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}

	//if(!isset($_COOKIE["msg"])){$_COOKIE["msg"]="";}

	$userId = $dataHandler->generateID("A");
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/registerAdmin.css">
</head>

<body>
	<form name="form" id="form">
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
			            		<select name="gender" id="gender">
			            			<option value="">Select</option>
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
			            		<textarea placeholder="Field is requied" name="address" id="address" form="form" style="resize: none;"></textarea>
							</div>
							<br>
						</td>
						<td>
							<div class="reg">
						<label class="label" style="margin-left: 70px;">First Name:</label>
	            		<input class="text-box" type="text" name="fname" id="fname" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 53px;">Middle Name:</label>
			            		<input class="text-box" type="text" name="mname" id="mname" placeholder="Field is optional">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 72px;">Last Name:</label>
			            		<input class="text-box" type="text" name="lname" id="lname" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 66px;">National ID:</label>
			            		<input class="text-box" type="text" name="nid" id="nid" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 46px;">Phone Number:</label>
			            		<input class="text-box" type="text" name="contact" id="contact" placeholder="Field is requied">
							</div>
							<br>
							<div class="reg">
								<label class="label" style="margin-left: 103px;">Email:</label>
			            		<input class="text-box" type="text" name="email" id="email" placeholder="Field is requied">
							</div>
							<br>
						</td>
					</tr>
				</table>

				<div id="msg">
						<!-- <?php
							echo $_COOKIE["msg"];
						?> -->
				</div>
				<div style="width: 100%; margin: auto; text-align: center;">
					<button class="btn text" name="register" id="register">Register</button>
					<button class="btn text" type="button" name="clear" id="clear">Clear</button>
				</div>
			</div>
			<div class="container-2 card">
				<div class="header">
					<h3 style="margin-left: 30px; padding-top: 15px;">List of Admins</h3>
					<hr>
				</div>
				<div style="overflow-y: scroll; height: 320px;">
					<table style="width: 100%;" id="adminList">
					</table>
				</div>
			</div>
		</div>
	</form>

	<script src="../JS/registerAdmin.js"></script>
</body>