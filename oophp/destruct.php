<!-- <?php 
class des {
public function __construct(){
	echo "Nirjon Roy";
}
public function new(){
	echo "likes";
}
public function __destruct(){
	echo "Mampy Rani Nath";
}
}
$obj = new des;
$obj->new(); 

?> -->
<?php
class oop{
private $name;
 public function __construct($val){
     return $this->name=$val;
 }
 public function sayHello(){
     echo "Hello World";
 }
  
 public function __destruct(){
     echo "<br>Bye bye $this->name!";
 }
 
}
$obj=new oop("Imran");
 
echo "<br>";
 
$obj->sayHello();
 
?>