<?php
	include "../Controller/UserDataHandler.php";
	session_start();

	if(!isset($_SESSION["id"]))
	{
		header("Location: ../view/login.php");
	}

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
		<a class="tbtn" href="">Dashboard</a>

		<?php 
			if($d == "D")
	        {
	            echo '<a class="tbtn" href="AvailableInfo.php">Available Info</a>';
	            echo '<a class="tbtn" href="createprescription.php">Prescription</a>';
	            echo '<a class="tbtn" href="otinitiate.php">OT Initiate</a>';
	            echo '<a class="tbtn" href="patienthistory.php">Patient History</a>';
	            echo '<a class="tbtn" href="apptarchive.php">Appointment Archive</a>';
	            echo '<a class="tbtn" href="testgen.php">Test Generate</a>';
	            echo '<a class="tbtn" href="appt.php">Manage Appointment</a>';

	        }
			else if($d == "A")
			{
				echo '<a class="tbtn" href="registerAdmin.php">Register</a>';
				echo '<div class="dropdown">
					<a class="tbtn dropbtn" href="#" id="editbtn">Edit</a>
					<div id="dropdown1" class="dropdown-content">
						<a class="tbtn dbtn" style="border-radius:10px 10px 0px 0px" href="editDoctors.php">Edit Doctors</a>
						<a class="tbtn dbtn" style="border-radius:0px 0px 10px 10px" href="manageSalary.php">Manage Salaries</a>
					</div>
				</div>';
				echo '<a class="tbtn" href="userInfo.php">User Info</a>';
				echo '<div class="dropdown">
					<a class="tbtn dropbtn" href="#" id="trackbtn">Tracks</a>
					<div id="dropdown2" class="dropdown-content">
						<a class="tbtn dbtn" style="border-radius:10px 10px 0px 0px" href="roomdetails.php">Room Details</a>
						<a class="tbtn dbtn" style="border-radius:0px"  href="billingHistory.php">Billing History</a>
						<a class="tbtn dbtn" style="border-radius:0px" href="medicineHistory.php">Medicine History</a>
						<a class="tbtn dbtn" style="border-radius:0px 0px 10px 10px" href="sessionLogs.php">Session Logs</a>
					</div>
				</div>';
				echo '<a class="tbtn" href="archivedUsers.php">Archived Users</a>';
			}
			else if($d == "N")
	        {
	            echo '<a class="tbtn" href="../view/newPatientReg.php">New Patient Register</a>';
	            echo '<a class="tbtn" href="../view/editPatDetails.php">Manage Patient Details</a>';
	            echo '<a class="tbtn" href="../controller/medicalHistory.php">Medical History</a>';
	            echo '<a class="tbtn" href="../view/allocateNewPat.php">Patient Allocation</a>';
	            echo '<a class="tbtn" href="../view/healthUpdateForm.php">Health Update</a>';
	            echo '<a class="tbtn" href="#">Appointment</a>';
	            echo '<a class="tbtn" href="../view/bloodEntry.php">Blood Donation</a>';
	        }
			?>

		<a style="margin-left: auto;" class="tbtn" href="../view/editProfile.php"><span id="userid"><?php echo $id; ?></span></a>
		<a style="margin-right: 15px;" class="tbtn" href="../controller/logoutController.php">Log out</a>

	</div>

	<script src="../JS/jquery-3.6.0.js"></script>
	<script src="../JS/template.js"></script>
	<script src="https://kit.fontawesome.com/e9c2194c00.js" crossorigin="anonymous"></script>

</body>
</html>