<?php
	include 'UserDataHandler.php';

	$dataHandler = new UserDataHandler;

	if($_GET["id"]=="")
	{
		$query = "select * from archive";
	}
	else
	{
		$query = "select * from archive where userid=".$_GET["id"];
	}

	$result = $dataHandler->getRecord($query);
	if($result == null)
	{
		echo "No user found!";
	}
	else
	{
		$data = '<tr class="header">
					<th>Name</th>
					<th>ID</th>
					<th>Email</th>
					<th>Address</th>
					<th>Time</th>
					<th>Archived By</th></tr>';
		while($row = $result->fetch_assoc())
		{
			$data.= '<tr class="data">
					<td>'.$row["uname"].'</td>
					<td>'.$row["userid"].'</td>
					<td>'.$row["email"].'</td>
					<td>'.$row["address"].'</td>
					<td>'.$row["time"].'</td>
					<td>'.$row["archivedBy"].'</td>
				</tr>';
		}

		echo "$data";
	}
?>