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
    $query = "SELECT * FROM patientallocation";
    echo '<table class="card">
	<thead>
	<tr class="header">
		<th style="width:10%;">Patient ID</th>
		<th style="width:10%;">Patient Name</th>
		<th style="width:10%;">Type</th>
		<th style="width:10%;">Floor no</th>
		<th style="width:10%;">Ward no</th>
		<th style="width:10%;">Bed no</th>
		<th style="width:10%;">Cabin no</th>
		<th style="width:10%;">Allocation time</th>
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
          <td style="text-align:center">'.$row["pid"].'</td>
          <td style="text-align:center">'.$row["pName"].'</td>
          <td style="text-align:center">'.$row["type"].'</td>
          <td style="text-align:center">'.$row["floorNo"].'</td>
          <td style="text-align:center">'.$row["wardNo"].'</td>
          <td style="text-align:center">'.$row["bedNo"].'</td>
          <td style="text-align:center">'.$row["cabinNo"].'</td>
          <td style="text-align:center">'.$row["allDateTime"].'</td>
        </tr>';
      }
    }
	echo '</table>';
	?>
</body>
</html>