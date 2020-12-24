<!-- <!-- <?php 	
$country = ['c'=>'canda','b'=>'bangladesh','a'=>'amrica','d'=>'denmark'];
function ascfunction($a,$b){
	if ($a==$b) {
		# code...
		return 0;
	}
	return $a<$b ?-1:1;
}
uasort( $country, 'ascfunction');
echo '<pre>';
print_r($country);



 ?> -->


 <!-- <?php

function deter($a){
	if($a % 2 == 0){
		echo "even";
	}
	else {
		echo "odd";
	}

}

deter(2);

 ?> -->

 <!-- <?php 	
$number = range(1, 30);
$odd= array_filter($number,function($num){
	return $num % 2 ==1;

});
$even= array_filter($number,function($num){
	return $num % 2 ==0;

});
echo '<pre>';
echo "odd";
print_r($odd);
echo "even";
print_r($even);
  ?> --> -->



<!-- 
<?php 	
$friuts = ['a'=>'mango','b'=>'banana','c'=>'orange'];
function furiutsGet($value, $key){
	if ($key == 'a'|| $key == 'b' || $value == 'banana') {
		return $key;
	}
}
$data = array_filter($friuts, 'furiutsGet', ARRAY_FILTER_USE_BOTH);
echo '<pre>';
print_r($data);

 ?>
 -->

 <ol>
 	<?php

 	$people = ['5'=> 'Nirjon', '3'=> 'Abul', '2'=> 'Tufazzul', '1'=> 'Santo'];
 	function ascFun($a, $b){
 		if($a == $b){
 			return 0;

 		}
 		return $a < $b ;
 	}
 	uasort($people, 'ascFun');
 	foreach ($people as $key => $val) {
 		?>

 		<li> <?php echo ($key), '', $val; ?></li>
<?php 	}
 	?>




 </ol>

