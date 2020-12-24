<?php

$emp = array
	(
array(1, "abc", 400),
array(2, "def", 500),
array(3, "ghi", 600)

);
for($row = 0; $row < 3; $row++){
	for($col = 0; $col <3; $col++){
		echo $emp[$row][$col]. "";
	}
	echo "<br/>";
}

?>