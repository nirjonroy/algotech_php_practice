<?php 

class simpleClass{
	static public $var = 'Nirjon';
	const a = 'Amrica';
	public function sayHello(){
		echo self::$var;
		echo "<br/>", self::a;

	}

}

$obj = new simpleClass;
$obj->sayHello();

?>