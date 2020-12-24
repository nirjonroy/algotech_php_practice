<?php 

class person {
	public $name;
	public $roll;
	public function set_name($name){
		$this->name = $name;
		return $this;
	}
	public function set_roll($roll){
		$this->roll = $roll;
		return $this;
	}
	public function get_info(){
		return "My Name is :". $this->name. "Roll is :". $this->roll;
	}

}

$obj = new person;
echo $obj->set_name('Nirjon')->set_roll('372196')->get_info();



?>