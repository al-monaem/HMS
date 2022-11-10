<?php
	include "UserDataHandler.php";
	$dataHandler = new UserDataHandler;

	//$dataHandler->log($_GET['id']);

	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		if(isset($_GET["function"]))
		{
			$query = "select * from doctors where id='".$id."'";
			$result = $dataHandler->getRecord($query);

			if($result==null)
			{
				echo "<h4>No data found!</h4>";
			}
			else
			{
				$record = $result->fetch_assoc();

				echo '<h3 style="margin-left:15px;">Doctor: '.$record['uname'].'</h3><hr><div style="margin-left:80px; margin-top:80px;">
						<p>ID: '.$record['id'].'</p>
						<p>Specialization: '.$record['specialization'].'</p>
					</div><div style="margin-left:80px; margin-top:80px;" id="update">
						<label>Add specialization: </label>
						<input class="text" id="text" type="text" placeholder="Enter specialization">
						<button class="text btn add" style="margin-left:50px;" id='.$record['id'].'>Add</button></div>';
			}
		}

		else
		{
			$query = "select image from doctors where id='".$id."'";
			$result = $dataHandler->getRecord($query);

			$image = "";

			if($result==null || $result->num_rows < 1)
			{
				echo "error";
			}
			else
			{
				$image = ($result->fetch_assoc())["image"];
				echo '<img src="'.$image.'" onerror=this.src="../images/default.png" width="100px" height="100px"><br>
						<button class="btn text edit" id='.$id.'>Edit Profile</button>';
			}
		}
	}

	else if(isset($_POST["id"]))
	{
		$id = $_POST["id"];
		$query = "update doctors set specialization='".$_POST["specialization"]."' where id='".$id."'";
		$result = $dataHandler->updateRecord($query);

		if($result==false)
		{
			echo '<small class="error">Error updating!</small>';
		}
		else
		{
			echo '<small class="success">Successfully updated!</small>';
		}
	}
?>