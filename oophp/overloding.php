<?php

class property{

private $data = array();

 public function __set($name, $value){
 	echo " This is array '$name' and this is array value: '$value' \n ";
 	$this->data[$name] = $value;
 }
 public function __get($name)
    {
    	echo "<br>";
        echo "Getting '$name' Property with Value : ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

public function __isset($name){
	echo "<br>";
	echo "Is '$name' Property set?\n";
	echo isset($this->data[$name]) ? "Yes '$name' is set" : "not '$name' property isn't set ";
	echo "\n";

}
public function __unset($name){
	echo "Unseeting '$name'";
		unset($this->data[$name]);
}
}
$obj = new property;
$obj->a = 'Nirjon';
echo $obj->a;
isset($obj->a);
unset($obj->a);
isset($obj->a);
?>

