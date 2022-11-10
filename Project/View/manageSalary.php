<?php
	include 'template.php';

	$dataHandler = new UserDataHandler;
?>
<head>
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/userInfo.css">
	<link rel="stylesheet" type="text/css" href="../css/manageSalary.css">
</head>
<body>
	
	<div class="container">
		<div class="container-1 card">
			<div class="container-1a">
				<table class="table1">
					<tr class="header">
						<th style="border-radius: 10px 0px 0px 10px">
							<h3>Username</h3>
						</th>
						<th>
							<h3>ID</h3>
						</th>
						<th>
							<h3>Profession</h3>
						</th>
						<th>
							<h3>Salary</h3>
						</th>
						<th style="border-radius: 0px 10px 10px 0px">
						</th>
					</tr>
					<?php
						$query2 = "select * from doctors";
						$query3 = "select * from nurses";
						$tables = $dataHandler->getMultipleRecords($query2,$query3);

						foreach ($tables as $table) {
							while($row=$table->fetch_assoc())
							{
								echo '<tr style="height:60px;" class="data">
										<td>'.$row["uname"].'</td>
										<td>'.$row["id"].'</td>
										<td>'.$row["designation"].'</td>
										<td>'.$row["salary"].'</td>
										<td align="center"><button class="btn text lbtn" id='.$row["id"].'>Edit Salary</button></td>
									</tr>';
							}
						}

						// foreach ($doctors as $record)
						// {
						// 	echo '<tr style="height:60px;">
						// 			<td>'.$record["uname"].'</td>
						// 			<td>'.$record["id"].'</td>
						// 			<td>'.$record["designation"].'</td>
						// 			<td>'.$record["salary"].'</td>
						// 			<td align="center"><button class="btn text">Edit Salary</button></td>
						// 		</tr>';
						// }
					?>
				</table>
			</div>
		</div>
		<div class="container-2">
			<div class="container-2-c-1">
				<form method="post" class="card">
					<div class="form-container" align="center">
						<div>
							<label class="text" style="margin-right: 10px;">Enter ID: </label>
							<input class="text" id="id" type="text" placeholder="Enter id">
						</div>
						<div id="msg" style="margin-top: 10px"></div>
						<button class="btn text" style="margin-top: 15px;" id="search">Search</button>
					</div>
				</form>
			</div>
			<div class="container-2-c-2">
				<table class="table3 card">
					<!-- <?php
						if($edit)
						{
							echo '<tr style="height:60px;"><th colspan="3">User Info</th>
								</tr>';
							echo '<tr style="height:60px;"><td><b>Username: </b></span>'.$user->uname.'</td><td><b>Profession: </b>'.$user->designation.'</td><td><b>Current Salary: </b>'.$user->salary.'</td>
								</tr>';
							echo '<tr style="height:60px;"><td colspan="3"><label><b>Enter new salary: </b></label><input type="text" class="text-box" name="salary"></td>
								</tr>';
							echo '<tr style="height:60px;"><td colspan="3"><button class="btn text" name="update">Update</button></td>
								</tr>';
							if($update && $msg!="")
							{
								echo '<tr><td style="color:red;" colspan="3">'.$msg.'</td></tr>';
							}
						}
					?> -->
			</table>
			</div>
		</div>
	</div>

	<script src="../js/manageSalary.js"></script>

</body>