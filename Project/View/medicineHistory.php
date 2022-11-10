<?php
	include 'template.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/medicineHistory.css">
</head>
<body>
	<div class="card" id="container">
		<table id="records">
			<tr class="header">
				<th>Doctor ID</th>
				<th>Patient ID</th>
				<th>Appointment ID</th>
				<th>Prescribed Medicine</th>
				<th>Appointment Date</th>
			</tr>
			<?php
				$query="select * from prescriptiondetails, appointmentdetails where appointmentdetails.apid=prescriptiondetails.apid";

				$data=$dataHandler->getRecord($query);
				if($data!=null)
				{
					while($row=$data->fetch_assoc())
					{
						echo '<tr>
							<td>'.$row["did"].'</td>
							<td>'.$row["pid"].'</td>
							<td>'.$row["apid"].'</td>
							<td>'.$row["meds"].'</td>
							<td>'.$row["date"].'</td>
						</tr>';
					}
				}
			?>
		</table>
	</div>
</body>