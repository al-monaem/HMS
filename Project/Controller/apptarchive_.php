<?php

	include "UserDataHandler.php";
	$dataHandler = new UserDataHandler;
	$output = '';  
    $query = "SELECT apid,symp,uname,date,remarks,contact FROM Patients,appointmentdetails where patients.id=appointmentdetails.pid and visitstatus='yes' order by date desc";
    $output .= '<table class="card" id="pttable">
<thead>
<tr id="test" class="header">
    <th style="width:10%;">Appointment ID</th>
    <th style="width:30%;">Name</th>
    <th style="width:30%;">Symptoms</th>
    <th style="width:30%;">Remarks</th>
    <th style="width:15%;">Date</th>
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
          <td>'.$row["apid"].'</td>
          <td>'.$row["uname"].'</td>
          <td>'.$row["symp"].'</td>          
          <td>'.$row["remarks"].'</td>
          <td>'.$row["date"].'</td>
          <td>'.$row["contact"].'</td>
        </tr>';
      }
    }
 $output .= '</table>';
 echo $output;  
?>