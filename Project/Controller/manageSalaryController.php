<?php
	include "UserDataHandler.php";

	$dataHandler = new UserDataHandler;
	$id = $_GET['id'];
	$query = "";

	if(strlen($id)>0)
	{
		if(substr($id, 0, 1) == "D")
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
		echo '<h3>User: '.$data["uname"].'</h3><hr><tr style="height:60px;"><th colspan="3">User Info</th>
			</tr><tr style="height:60px;"><td><b>Username: </b></span>'.$data["uname"].'</td><td><b>Profession: </b>'.$data["designation"].'</td><td><b>Current Salary: </b>'.$data["salary"].'</td>
			</tr><tr style="height:60px;"><td colspan="3"><label><b>Enter new salary: </b></label><input type="text" class="text-box" name="salary"></td>
			</tr><tr style="height:60px;"><td colspan="3"><button class="btn text" name="update">Update</button></td>
			</tr>';
	}

?>