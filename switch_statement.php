<!-- <?php 

	$color = "tomato";

	switch ($color) {
		case 'red':
			echo "Favourite color is tomato";
			break;
		case 'green':
			echo "Favourite color is green";
			break;
		case 'blue':
			echo "Favourite color is blue";
			break;
		
		default:
			echo "<h1> Favourite color is tomato </h1>";
			break;
	}

?> -->


<?php 

	$marks = 39;

	switch ($marks){
		
		case ( $marks >= 90 ):
		echo "You got A+";
		break;

		case ( $marks >= 65 && $marks <= 80 ):
		echo "You got A";
		break;

		case ( $marks >= 33 && $marks <= 39):
		echo "You got C";   // break = if conditionis filled it will be stopped.
							// if do not use break; it will echo everything. 
		break;

		default:
		echo "Nothing to show";

	}




 ?>