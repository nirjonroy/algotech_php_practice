<?php

$emp = array(
	array(2, "abc", 5000),
	array(1, "def", 6000),
	array(3, "ghi", 7000)
);
for($row = 0; $row < 3; $row++){
	for($col = 0; $col < 3; $col++){
		echo $emp[$row][$col];
	}
	echo '<br>';
}

?>