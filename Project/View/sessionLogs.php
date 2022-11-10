<?php
	include 'template.php'
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/sessionLogs.css">
</head>

<body>
	<div class="container">
		<div class="card" id="container-1">
			<div class="search">
				<input type="text" id="id" placeholder="Enter Doctor ID">
			</div>
			<div>
				<table id="doctor"></table>
			</div>
		</div>
		<div class="card" id="container-2">
			<div class="search">
				<input type="text" id="id" placeholder="Enter Nurse ID">
			</div>
			<div>
				<table id="nurse"></table>
			</div>
		</div>
	</div>

	<script src="../js/sessionLogs.js"></script>
</body>