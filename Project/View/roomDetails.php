<?php
	include 'template.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/medicineHistory.css">
</head>
<body>
	<div id="container" class="card">
		<h3 class="header">Room Details</h3>
		<?php
			$query = 'select count(distinct(wardNo)) as count from patientallocation where wardNo != ""';
			$data = $dataHandler->getRecord($query);

			$wardno=0;
			if($data != null)
			{
				$wardno = ($data->fetch_assoc())["count"];
			}

			$query = 'select distinct(wardNo) from patientallocation where wardNo != ""';
			$wlist = $dataHandler->getRecord($query);

			if($wardno>0)
			{
				for($i=0; $i<$wardno; $i++)
				{
					$w = $wlist->fetch_assoc();

					$query = "select * from patientallocation where wardNo=".$w["wardNo"];
					$data = $dataHandler->getRecord($query);
					$string1 = "";
					$string2 = "";
					$string3 = "";

					while($row=$data->fetch_assoc())
					{
						$string1 .= '<td>'.$row["bedNo"].'</td>';
						$string2 .= '<td>'.$row["pid"].'</td>';
						$string3 .= '<td>'.$row["allDateTime"].'</td>';
					}

					echo '<div><h3 class="h">Ward No: '.$w["wardNo"].'</h3>
							<table class="room">
							<tr>
								<th>Bed No.</th>'.$string1.'
							</tr>
							<tr>
								<th>Patient ID</th>'.$string2.'
							</tr>
							<tr>
								<th>Allocation Date</th>'.$string3.'
							</tr>
						</table></div>';
				}
				
				$query = 'select * from patientallocation where cabinNo != ""';
				$data = $dataHandler->getRecord($query);

				if($data != null)
				{
					while($row = $data->fetch_assoc())
					{
						echo '<div><h3 class="h">Cabin No: '.$row["cabinNo"].'</h3>
							<table class="cabin">
							<tr>
								<th>Cabin No.</th>
								<td>'.$row["cabinNo"].'</td>
							</tr>
							<tr>
								<th>Patient ID</th>
								<td>'.$row["pid"].'</td>
							</tr>
							<tr>
								<th>Allocation Date</th>
								<td>'.$row["allDateTime"].'</td>
							</tr>
						</table></div>';
					}
				}
			}
		?>
	</div>
</body>