<!-- <?php 

$array = ['cat', 'rate', 'Tufazzul', 'abul', 'Bipul', 'nirjon'];

$result = array_walk($array, function($value, $key){
	echo "  $key => $value";
});
echo "<pre>";
print_r($result);

?> -->


<?php 

$array = 
[

[
'2'=>'ajis',
'5'=>'frnd',
'1'=>'cat',

],

[
'2'=>'d', 
'5'=>'frnd',
'1'=>'cat',

],

[
'2'=>'ajis',
'5'=>'frnd',
'1'=>'cat',

]

];
function ascfunction($key, $value){
	
		if ($key==$value) {

		# code...
		return 0;
	}
	return $key> $value;
}
uksort( $array, 'ascfunction');
echo '<pre>';
print_r($array);

 ?>