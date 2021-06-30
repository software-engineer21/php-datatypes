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