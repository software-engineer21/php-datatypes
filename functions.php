<?php 


	function details ($brand, $model, $used) {
		echo "My mobile brand is " . $brand . '<br>' . "Model Number Is " . $model . '<br>' . "I used it from " . $used . "month";
	}

	details ('Vivo', 'Vivo v20', 'last month');




	function addition ($a, $b) {
		echo "<br> Addition is" . ($a + $b);
	}

	addition(50, 50);




	function minus ($i, $p) {
		echo " <br> Minus value is " . ($i - $p );
	}

	minus(100, 50);