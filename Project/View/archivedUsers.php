<?php
	include 'template.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/archivedUsers.css">
</head>
<body>
	<div class="search">
		<h4>Archived Users</h4>
		<label>Enter ID:</label>
		<input type="text" id="search" oninput="search()">
	</div>
	<div id="container" class="card">
		<table id="records">
		</table>
	</div>

	<script src="../js/archivedUsers.js"></script>
</body>