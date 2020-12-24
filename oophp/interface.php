<?php

class member implements presistable{

private $username;
private $location;
private $homepage;

public function __construct($username, $location, $homepage){
	$this->username = $username;
	$this->location = $location;
	$this->homepage = $homepage;
}
public function getusername(){
	return $this->username;
}
public function getlocation(){
	return $this->location;
}
public function gethomepage(){
	return $this->homepage;
}

public function save(){
	echo "saving member to database";
}

public function sve(){
	echo "saving member to database";
}
public function load(){
	echo "loading member to database";
}
public function delete(){
	echo "deleting member to database";
}



}



$Member = new member('Nirjon', 'Mirpur', 'WWW.nirjontechbd.cf');
echo $Member->getusername();
echo $Member->getlocation();
echo $Member->gethomepage();

?>