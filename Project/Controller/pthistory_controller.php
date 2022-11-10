<?php

	include "UserDataHandler.php";
	$dataHandler = new UserDataHandler;
	$output = '';  
    $query = "SELECT pid,uname,contact2,covidinfo,covidvac,prevsickness FROM Patients,patienthistory where patients.id=patienthistory.pid";
    $output .= '<table class="card" id="pttable">
<thead>
<tr class="header">
    <th style="width:10%;">PID</th>
    <th style="width:40%;">Name</th>
    <th style="width:15%;">Covid Infected</th>
    <th style="width:15%;">Covid Vaccination</th>
    <th style="width:30%;">Previous Diseases</th>
    <th style="width:30%;">Emergency Contact</th>
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
          <td>'.$row["pid"].'</td>
          <td>'.$row["uname"].'</td>
          <td>'.$row["covidinfo"].'</td>
          <td>'.$row["covidvac"].'</td>
          <td>'.$row["prevsickness"].'</td>
          <td>'.$row["contact2"].'</td>
        </tr>';
      }
    }
 $output .= '</table>';
 echo $output;  
?>