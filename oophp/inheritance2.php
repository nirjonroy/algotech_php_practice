<?php 
class member{
public $username = '';
private $logedIn = false;
public function login(){
	$this->logedIn = true;
}
public function logout(){
	$this->logedIn = false;
}


}
class admin extends member {
public function login(){
	parent::login();
	echo "Name ". $this->username . " login <br>";
}	
}

$Admin = new admin;
$Admin->username = 'Nirjon Roy';
$Admin->login();
$Admin->logout();
?>