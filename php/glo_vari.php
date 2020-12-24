<?php 
$a = 10;
$b = 20; 
function addition(){
	$GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];

}

addition();
echo $z;

?>