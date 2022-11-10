<?php
	include 'Template.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/editDoctors.css">
</head>

<body>
	<div class="container">
		<div class="container-1 card">
			<form>
				<div class="contents">
					<div align="center" class="contents-1">
						<label class="text">Enter ID: </label>
						<input class="text" id="id" type="text" placeholder="Enter ID">
						<br>
						<div id="msg" style="margin-top:10px">
						</div>
						<button class="btn text" style="margin-top: 15px;" id="search">Search</button>
					</div>
					<div class="contents-2" id="image" align="center">
					</div>
				</div>
			</form>
		</div>
		<div class="container-2">
			<div class="container-2a card">
				<table class="table-1" width="100%;">
					<tr class="header">
						<th style="width: 33%">Username</th>
						<th style="width: 33%">ID</th>
						<th style="width: 33%"></th>
					</tr>
					<?php
						$query = "select * from doctors";
						$table = $dataHandler->getRecord($query);
						if($table != null)
						{
							while($row=$table->fetch_assoc())
							{
								echo '<tr>
									<td class="text" style="width: 33%; text-align: center; padding-top:20px;">'.$row["uname"].'</td>
									<td class="text" style="width: 33%; text-align: center; padding-top:20px;">'.$row["id"].'</td>
									<td style="padding-top:20px; text-align:center;"><button class="btn text lbtn" id='.$row["id"].'>Edit profile</button></td>
								</tr>';
							}
						}
					?>
				</table>
			</div>
			<div class="container-2b card">
				<div id="content"></div>
				<div id="updatemsg"></div>
			</div>
		</div>
	</div>

	<script src="../js/editDoctors.js"></script>

</body>