<?php
	include "UserDataHandler.php";

	session_start();

	$dataHandler = new UserDataHandler;
	$query = "";
	$flag = true;

	if(isset($_POST["function"]))
	{
		$id = $_POST["id"];
		if($_POST["function"]=="archive")
		{
			if(substr($id, 0, 1) == "D"){
				$query = "select * from doctors where id='".$id."'";
			}
			else if(substr($id, 0, 1) == "N"){
				$query = "select * from nurses where id='".$id."'";
			}

			$result = $dataHandler->getRecord($query);

			if($result != null)
			{
				if(substr($id, 0, 1) == "D"){
					$query = "delete from doctors where id='".$id."'";
				}
				else if(substr($id, 0, 1) == "N"){
					$query = "delete from nurses where id='".$id."'";
				}

				if($dataHandler->deleteRecord($query))
				{
					echo "User Archived";
				}
				else
				{
					echo "Failed to archive";
				}

				$result = $result->fetch_assoc();
				$query = "insert into archive(userid, uname, email, address, archivedBy) values('".$id."','".$result["uname"]."','".$result["email"]."','".$result["address"]."','".$_SESSION["id"]."')";
				$dataHandler->insert($query);
			}
		}

		die();
	}

	$id = $_GET['id'];

	if(strlen($id)>0)
	{
		if(substr($id, 0, 1) == "A")
		{
			$query = "select * from admins where id='".$id."'";
		}
		else if(substr($id, 0, 1) == "D")
		{
			$query = "select * from doctors where id='".$id."'";
		}
		else if(substr($id, 0, 1) == "N")
		{
			$query = "select * from nurses where id='".$id."'";
		}
		else if(substr($id, 0, 1) == "P")
		{
			$query = "select * from patients where id='".$id."'";
		}
		else
		{
			echo "error";
			die();
		}
	}
	else
	{
		echo "error";
		die();
	}

	$result = $dataHandler->getRecord($query);
	if($result==null || $result->num_rows<1)
	{
		echo "error";
	}
	else
	{
		$data = $result->fetch_assoc();
		echo '<table style="width:100%">
				<tr>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>Username: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data['uname'].'" disabled>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>Email: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["email"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>Contact: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["contact"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>Address: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["address"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>Gender: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["gender"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>NID: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["nid"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="width:50%">
						<table>
							<tr>
								<td style="text-align:right; width:40%">
									<label>NID: </label>
								</td>
								<td>
									<input id="text-box" class="text" type="text" value="'.$data["nid"].'" disabled>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<div style="margin-left:300px">
				<img src="'.$data["image"].'" onerror=this.src="../images/default.png" width="100px" height="100px">
			</div>';
		}
?>