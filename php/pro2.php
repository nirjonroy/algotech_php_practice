<?php 	
$number= range(1,30);
$data = array_map(	function($nu){
return $nu**3;	

},
$number);
echo '<pre>';
print_r($data);

?>