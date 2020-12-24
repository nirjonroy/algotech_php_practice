<?php 
function display($n){
	if($n <= 5){
		echo "$n <br/>";
		display($n+1);
	}
}

display(1);

?>