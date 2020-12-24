<?php

$array1 = array('color'=>'red', 2, 4);
$array2 = array('color'=>'green', 3, 'shape'=> 'tringle');
$marge = array_merge($array1, $array2);
echo "<pre>";
print_r($marge);


?>