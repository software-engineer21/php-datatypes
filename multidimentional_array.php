<?php 

	$info = array (
		array (1, 'Tanvir', 'Sylhet', 70),
		array (2, 'Tamim', 'Dhaka', 80 ), 
		array (3, 'Thowhid', 'Barishal', 90),
		array (4, 'Tarek', 'Khulna', 100)
	);

	// echo "<pre>";
	// 	print_r($info);
	// echo "</pre>";


	echo "<table border='1'>";
	echo "<tr>
		<th> <h1>SL.</h1> </th>
		<th> <h1>Name </h1></th>
		<th> <h1>Place </h1></th>
		<th> <h1>Number </h1></th>
	</tr>";

	for ($row=0; $row <4; $row++) { 
		echo "<tr>";
	for ($col=0; $col<4; $col++) { 
		echo "<td> <h1>".$info[$row][$col]."</td> </h1>";			
	}

		echo "</tr>";
		}
	echo "</table>";

	?>


<?php 

	
	$infos = [
		[1, 'Jhon', 'CSE', 'Dhaka'],
		[2, 'Doe', 'EEE', 'Barisal'],
		[3, 'Steave', 'Sociology', 'Chittagong'],
		[4, 'Tanvir', 'Physics', 'Sylhet']
	];

	echo '
		<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Depertment</th>
			<th>Place</th>
		</tr>
	';

	foreach ($infos as list($id, $name, $dept, $place)){
		echo '<tr> <td>' . $id . '</td> <td>' . $name . '</td> <td>' . $dept . '</td> <td> ' . $place . '</td> </tr>';
	}

	echo '</table>';