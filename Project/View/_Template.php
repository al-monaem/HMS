<?php
	include "../Controller/UserDataHandler.php";
	session_start();
	$id = $_SESSION["id"];
	$d = substr($id, 0, 1);
	$dataHandler = new UserDataHandler;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/template.css">
</head>
<body>
	<div class="card" id="navbar">
		<ul>
		<li><a href="#">Dashboard</a></li>
		<?php 

		if($d == "D")
        {
            echo '<li><a href="AvailableInfo.php">Available Info</a></li>';
            echo '<li><a href="createprescription.php">Prescription</a></li>';
            echo '<li><a href="otinitiate.php">OT Initiate</a></li>';
            echo '<li><a href="#">Patient History</a></li>';
            echo '<li><a href="#">Appointment Archive</a></li>';
            echo '<li><a href="#">Test Generate</a></li>';
            echo '<li><a href="#">Manage Appointment</a></li>';

        }
		else if($d == "A")
		{
			echo '<li><a href="registerAdmin.php">Register</a></li>';
			echo '<li><a href="editDoctors.php">Edit Doctors</a></li>';
			echo '<li><a href="manageSalary.php">Manage Salaries</a></li>';
			echo '<li><a href="userInfo.php">User Info</a></li>';
			echo '<li><a href="#">Billing History</a></li>';
			echo '<li><a href="#">Reports</a></li>';
			echo '<li><a href="#">Medicine History</a></li>';
		}
		else if($d == "N")
        {
            echo '<li><a href="../view/newPatientReg.php">New Patient Register</a></li>';
            echo '<li><a href="#">Manage Patient Details</a></li>';
            echo '<li><a href="#">Medical History</a></li>';
            echo '<li><a href="../view/allocateNewPat.php">Patient Allocation</a></li>';
            echo '<li><a href="#">Health Update</a></li>';
            echo '<li><a href="#">Appointment</a></li>';
            echo '<li><a href="../view/bloodEntry.php">Blood Bank</a></li>';
        }
		  ?>
		  <li style="float:right"><a href="../controller/logoutController.php">Log out</a></li>
		  <li style="float:right"><a href="editProfile.php"><span id="userid"><?php echo $id; ?></span></a></li>
  
		  <div class="footer">
		  <p><a href="https://discord.gg/43hjPwCRqc">&copy; Copyright 2022 by Snakes </a></p>
		 </div>

		</ul>
		
	</div>

	<script src="../JS/jquery-3.6.0.js"></script>
	<script src="https://kit.fontawesome.com/e9c2194c00.js" crossorigin="anonymous"></script>

</body>
</html>