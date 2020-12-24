<?php 

class StudentInfo{
	public $student_name;
	public $student_roll;
	public $student_class;

	function set_name($name){
		$this->student_name = $name;
		return $this;
	}
		function set_roll($roll){
		$this->student_roll = $roll;
		return $this;
	}
	function set_class($class){
		$this->student_class = $class;
		return $this;
	}
	function showinfo(){
		return "My Name is " . $this->student_name. "roll is".$this->student_roll. "Class is". $this->student_class;
	}
}
$obj = new StudentInfo;
// 
// $obj->set_name('Nirjon Roy');
// $obj->set_roll('372196');
// $obj->set_class('Diploma_Final_year');
echo $obj->set_name('Nirjon Roy')
->set_roll('372196')
->set_class('Diploma_Final_year')
->showinfo();

?>