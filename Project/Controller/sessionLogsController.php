<?php
	include 'UserDataHandler.php';
	$dataHandler = new UserDataHandler;

	if(isset($_GET["type"]))
	{
		$type = $_GET["type"];

		if($type=="doctor"){
			$query = "select * from logs where substring(id,1,1)='D'";
			$data = $dataHandler->getRecord($query);
		}
		else if($type=="nurse")
		{
			$query = "select * from logs where substring(id,1,1)='N'";
			$data = $dataHandler->getRecord($query);
		}

		$html = "<tr class='header'>
					<th>Username</td>
					<th>ID</td>
					<th>Email</td>
					<th>Logged on</td>
				</tr>";
		if($data != null)
		{
			while($row = $data->fetch_assoc())
			{
				$html.="<tr class='data'>
							<td>".$row["uname"]."</td>
							<td>".$row["id"]."</td>
							<td>".$row["email"]."</td>
							<td>".$row["time"]."</td>
						</tr>";
			}
		}

		echo $html;
	}
?>