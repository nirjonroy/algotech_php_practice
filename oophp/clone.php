<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
    function __clone(){
    	$this->mobile = '0177799';
    }
}
$obj1 = new test("Farhaan" , "01700000000");
echo "Result Before Copy \n";
echo "<pre>";
print_r($obj1);
echo "After Copy Both Object will show same result\n";
$obj2 = clone $obj1; //Copy of the object
$obj2->name = "Habibr";
print_r($obj1);
print_r($obj2);
?>