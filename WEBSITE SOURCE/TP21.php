<!DOCTYPE html>
<html>
	<!-- HEAD -->
	<head>
		<title> Accounting Website </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

	<!-- BODY -->
	<body>
		<div id="page">
		
			<!-- Header -->
			<div id="top_header">
				<a href="m/index.php" class="top_header">Mobile</a>
				<a href="index.php" class="top_header">PC</a>
			</div>
			
			<!-- Sub Header -->
			<div id="sub_header">
			<center>
				<a href="T000.php" class="transaction">Transaction</a>
				<a href="R000.php" class="report">Report</a>
				<a href="M000.php" class="master_file">Master File</a>
				<!-- <a href="utility.php" class="utility">Utility</a> -->
			</center>
			</div>
			
			<!-- Navigator Menu -->
			<div id="sidebar">
				TRANSACTION
				<ul>
					<li> <a href="TS10.php" class="sidelinks"> Entry Sales </a></li>
					<li> <a href="TS20.php" class="sidelinks"> Modify Sales </a></li>
					<li> <a href="TS30.php" class="sidelinks">List Sales</a></li>
					</br>
					<li> <a href="TP10.php" class="sidelinks"> Entry Purchase </a></li>
					<li> <a href="TP20.php" class="sidelinks"> Modify Purchase </a></li>
					<li> <a href="TP30.php" class="sidelinks">List Purchase</a></li>
				</ul>
			</div>
			
			<!-- Contents -->
			<div id="body">
				<h3> Edit Data</h3>
				<?php

						 include("connection.php");

						$mPCFC = $_GET['PC_FC'];
						
						$query = "SELECT * FROM PURCHASE WHERE PC_FC ='$mPCFC'";
						$sql = mysql_query($query);
						if($sql === FALSE) {
							die(mysql_error()); // TODO: better error handling
						}
						$data= mysql_fetch_array($sql);

						echo "<form method='post' action='TP22.php'>";
						echo "<table>";
						echo "<tr><td>Factur No			</td><td>:</td><td>".$data['PC_FC']."</td></tr>";
						echo "<tr><td>Date					</td><td>:</td><td><input type='text' name='PC_DATE'  value='".$data['PC_DATE']."'></td></tr>";
						echo "<tr><td>Supp-no			</td><td>:</td><td><input type='text' name='PC_SUPP' value='".$data['PC_SUPP']."'></td></tr>";
						echo "<tr><td>Address			</td><td>:</td><td><input type='text' name='PC_ADDR' value='".$data['PC_ADDR']."'></td></tr>";
						echo "<tr><td>Detail				</td><td>:</td><td><input type='text' name='PC_DET'  value='".$data['PC_DET']."'></td></tr>";
						echo "<tr><td>Amount				</td><td>:</td><td><input type='text' name='PC_AMT'  value='".$data['PC_AMT']."'></td></tr>";

						echo "</table>";
						echo "<input type='hidden' name='PC_FC' value='".$data['PC_FC']."'>";
						echo "<input type='submit' name='submit' value='Submit'>";
						echo "</form>";

					?>
				


			</div>
			
			
			
			<!-- Footer -->
			<div id="footer">
			
			</div>
		</div>
	</body>
</html>