<?php 


	function details ($brand, $model, $used) {
		echo "My mobile brand is " . $brand . '<br>' . "Model Number Is " . $model . '<br>' . "I used it from " . $used . "month";
	}

	details ('Vivo', 'Vivo v20', 'last month');