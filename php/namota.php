<?php

	function namota($n){
		return function($i) use($n){
			while($i <= 10){
			echo "$n x $i =" . $n * $i ."<br/>";
			$i = $i + 1;
		}
		};
	}

	$x = namota(5);
	$y = $x(1);

?> 
