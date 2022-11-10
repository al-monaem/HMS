<?php
	include "../view/Template.php";
	//include "UserDataHandler.php";
	$dataHandler = new UserDataHandler;
	$output = '';  
    $query = "SELECT * FROM health";
    $output .= '<table class="card" id="pttable">
<thead>
<tr class="header">
    <th style="width:50% style="text-align:center";">Patient ID</th>
    <th style="width:50% style="text-align:center;">Patient Name</th>
    <th style="width:50% style="text-align:center;">Patient Gender</th>
    <th style="width:50% style="text-align:center;">Blood Pressure</th>
    <th style="width:50% style="text-align:center;">Heart Beat</th>
    <th style="width:50% style="text-align:center;">Pulse</th>
    <th style="width:50% style="text-align:center;">Diabetes</th>
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
        $output .= '<tr>
          <td>'.$row["patId"].'</td>
          <td>'.$row["patName"].'</td>
          <td>'.$row["patGender"].'</td>
          <td>'.$row["bloodPressure"].'</td>
          <td>'.$row["heartBeat"].'</td>
          <td>'.$row["pulse"].'</td>
          <td>'.$row["diabetes"].'</td>
        </tr>';
      }
    }
 $output .= '</table>';
 echo $output;  
?>