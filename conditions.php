<?php 



	$a = 100;
	$b = 200;

	if($a < $b){
		echo "A is greater than B"."</br>";
	} 

	$a = 100;
	$b = 200;

	if($a > $b){
		echo "A is greater than B"."</br>";
	} else {
		echo "A is not greater than B <br/>";
	}




 ?>

 <?php 


	$marks1 = 5;

	if( $marks1 == 100 ){
		echo "You got Golden A+"."</br>";
	} elseif ( $marks1 >= 80 && $marks1 <= 90) {
		echo "you got A+";
	} elseif ( $marks1 >= 70 && $marks1 <= 79) {
		echo "you got A";
	} elseif ( $marks1 >= 60 && $marks1 <= 69) {
		echo "you got A-";
	} elseif ( $marks1 >= 50 && $marks1 <= 59) {
		echo "You got B";
	} elseif ( $marks1 >= 40 && $marks1 <= 49 ) {
		echo "you got D";
	} elseif ( $marks1 >= 33 && $marks1 <= 39) {
		echo "You got C";
	} elseif ( $marks1 >= 0 && $marks1 <= 32){
		echo "You are Failed";
	}





  ?>