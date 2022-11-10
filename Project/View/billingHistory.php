<?php
	include 'template.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/billingHistory.css">
</head>
<body>
	<div id="container" class="card">
		<table id="records">
			<tr class="header">
				<th>Billing ID</th>
				<th>Appointment ID</th>
				<th>Patient ID</th>
				<th>Precribed Medicine</th>
				<th>Amount</th>
				<th>Payment Status</th>
			</tr>
			<?php
				$query = "select * from billing,appointmentdetails,prescriptiondetails where billing.apid = appointmentdetails.apid and appointmentdetails.apid = prescriptiondetails.apid";
				$data = $dataHandler->getRecord($query);
				if($data != null)
				{
					while($row = $data->fetch_assoc())
					{
						echo '<tr class="data">
								<td>'.$row["bid"].'</td>
								<td>'.$row["apid"].'</td>
								<td>'.$row["pid"].'</td>
								<td>'.$row["meds"].'</td>
								<td>'.$row["amount"].'</td>
								<td>'.$row["status"].'</td>
							</tr>';
					}
				}
			?>
		</table>
	</div>
</body>