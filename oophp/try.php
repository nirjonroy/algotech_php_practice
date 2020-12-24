<?php
abstract class AbstractClass{

	public $name;
	public $age;
    abstract protected function getName($name);
    abstract protected function getInfo($age);
    }
 
class childClass extends AbstractClass{
    public function getName($name) {
        return 'Hi '.$prefix.$name.' !';
    }
}
 
$class = new childClass;
echo $class->getName('Nirjon'), '\n';
?>
