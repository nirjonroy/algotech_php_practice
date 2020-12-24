<?php 

class person {
 public	$name;
public	$age;
	function __construct($name, $age){
		$this->name = $name;

		$this->age = $age;
	}

	function get_result(){
		return $this->name;
		return $this->age;
	}
}

$man = new person('nirjon', '19');
echo $man->get_result();
echo "<br>";


?>

<?php 

class mampy{

	public function __construct(){
		echo  "hello mampy Rani";
	}

}
$obj = new mampy;


?>