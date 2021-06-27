<!-- data type checking function -->

<?php 

	
	$string = "This is a string".'<br/>';
	echo $string;

	$integer = 112;
	echo $integer.'<br/>';

	$float = 4.32;
	echo $float.'<br/>';

	$boolean = true;
	echo $boolean.'<br/>';

	var_dump($boolean); 

	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
 ?>

<!-- Arithmetic operator -->


 <?php 

 $a = 10;
 $b = 32;

 $c = $a + $b;

 echo $c.'<br/>';


$d = 33;
$e = 343;

$t = $e - $d;

echo $t.'<br/>';


$r = 11;
$w = 2;

$q = $r / $w;

echo $q.'<br/>';


$r = 11;
$w = 2;

$q = $r * $w;

echo $q.'<br/>';

$b = 10;
$n = 6;

$p = $b ** $n;

echo $p.'<br/>';




?>



<!-- Assignment Operator  -->

<?php 


	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";



	$a = 20;
	$b = 30;

	echo $a += $b.'<br/>';


	$c = 60;
	$d = 50;

	echo $c *= $d;

	$p = 70;
	$h = 90;

	echo $p -= $h;

	$v = 70;
	$x = 9;

	echo $v **= $x;


 ?>



<!-- Comparison Operator -->


 <?php 

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


 $a = 10;
 $b = '10'; 

 var_dump($a == $b); // If value equal to same && data type changed echo true. It will only check value matched or not.
 echo "<br/>";

$a = '30';
$b = '30'; // 

var_dump($a === $b); // Value and datatype should be same otherwise it will show false.
echo "<br/>";

$a = 10;
$b = 10;

var_dump($a != $b);  // both variable's value should not be same. != not equal to.
echo "<br/>";

$a = 50;
$b = 40;
var_dump($a > $b);	// If $a grater than $b it will show true.

echo "<br/>";

$a = 40;
$c = 30;
var_dump($a<$c); // If $a less than $c it will show false. 
echo "<br/>";

$a = 50;
$n = 10;

var_dump($a >= $n); // If $a is grater than or equal to $b it will be true
echo "<br/>";

$a = 100;
$d = 200;

var_dump($a<= $d);
echo "<br/>";