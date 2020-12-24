<?php 

$name = array(
array(
'fname' => 'Nirjon',
'lname' => 'Roy',


),
array(
'fname' => 'Abul',
'lname' => 'Hossain',


)

);

$fname = array_column($name, 'fname');
echo "<pre>";
print_r($fname);

?>