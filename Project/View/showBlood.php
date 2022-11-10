<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/Common.css">
</head>
<body>

<?php
	include "../controller/UserDataHandler.php";
	$dataHandler = new UserDataHandler;
	$output = '';  
    $query = "SELECT dname,bGroup,dcontact FROM blood";
    echo '<table class="card">
	<thead>
	<tr class="header">
		<th style="width:30%;">Donor name</th>
		<th style="width:30%;">Blood Group</th>
		<th style="width:30%;">Donor contact</th>
	</tr>
	</thead>';
    $data = $dataHandler->load($query);
    if($data==null)
    {
      echo "No data found!";
    }
    else
    {
      while ($row = $data->fetch_assoc()) {
        echo '<tr>
          <td>'.$row["dname"].'</td>
          <td>'.$row["bGroup"].'</td>
          <td>'.$row["dcontact"].'</td>
        </tr>';
      }
    }
	echo '</table>';
	?>
</body>
</html>