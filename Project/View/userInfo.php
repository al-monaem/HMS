<?php
	include 'template.php';

	$dataHandler = new UserDataHandler;
?>
<head>
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/userInfo.css">
</head>
<body>
	
	<div class="container">
		<div class="container-1 card">
			<div class="container-1a">
				<table class="table1">
					<tr class="header">
						<th style="border-radius: 10px 0px 0px 10px; width: 30%">
							<h3>Username</h3>
						</th>
						<th  style="width: 30%">
							<h3>ID</h3>
						</th>
						<th  style="width: 30%">
							<h3>Profession</h3>
						</th>
						<th style="width: 5%">
						</th>
						<th style="border-radius: 0px 10px 10px 0px; width: 5%">
						</th>
					</tr>
					<?php
						$query1 = "select * from admins";
						$query2 = "select * from doctors";
						$query3 = "select * from nurses";
						$tables = $dataHandler->getMultipleRecords($query1,$query2,$query3);

						foreach ($tables as $table) {
							while($row=$table->fetch_assoc())
							{
								if($row["designation"]=="Admin")
								{
									echo '<tr style="height:60px;" class="data">
									<td>'.$row["uname"].'</td>
									<td>'.$row["id"].'</td>
									<td>'.$row["designation"].'</td>
									<td align="center"><button class="btn text lbtn" id='.$row["id"].'>View Profile</button></td>
									<td></td>
									</tr>';
								}
								else
								{
									echo '<tr style="height:60px;" class="data">
									<td>'.$row["uname"].'</td>
									<td>'.$row["id"].'</td>
									<td>'.$row["designation"].'</td>
									<td align="center"><button class="btn text lbtn" id='.$row["id"].'>View Profile</button></td>
									<td><button class="btn text archive" id='.$row["id"].'>Archive</button></td>
									</tr>';
								}
							}
						}

						// foreach ($admins as $record)
						// {
						// 	echo '<tr style="height:60px;">
						// 			<td>'.$record["uname"].'</td>
						// 			<td>'.$record["id"].'</td>
						// 			<td>'.$record["designation"].'</td>
						// 			<td align="center"><button class="btn text">View Profile</button></td>
						// 		</tr>';
						// }
						// foreach ($doctors as $record)
						// {
						// 	echo '<tr style="height:60px;">
						// 			<td>'.$record["uname"].'</td>
						// 			<td>'.$record["id"].'</td>
						// 			<td>'.$record["designation"].'</td>
						// 			<td align="center"><button class="btn text">View Profile</button></td>
						// 		</tr>';
						// }
						// foreach ($nurses as $record)
						// {
						// 	echo '<tr style="height:60px;">
						// 			<td>'.$record["uname"].'</td>
						// 			<td>'.$record["id"].'</td>
						// 			<td>'.$record["designation"].'</td>
						// 			<td align="center"><button class="btn text">View Profile</button></td>
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
							<input class="text" type="text" id="id" placeholder="Enter id">
						</div>
						<div id="msg" style="margin-top: 10px">
						</div>
						<button class="btn text" style="margin-top: 15px;" id="search">Search</button>
					</div>
				</form>
			</div>
			<div class="container-2-c-2">
				<table class="table2 card">
					<tr>
						<td id="userDetails">
							<!-- <?php
								if($searched && $user!=null)
								{
									echo '<h3>User: '.$user->uname.'</h3><hr>';
									echo $user->showDetails();
								}
							?> -->
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<script src="../js/userInfo.js"></script>

</body>