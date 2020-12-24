<?php 
class Member {
public $username = '';
private $loggedIn = false;
public function login(){
	$this->loggedIn = true;
} 
public function logout(){
	$this->loggedIn = false;
}
public function logcheck(){
	return $this->loggedIn;
}

}
class Admin extends Member
{
	public function createFourm($fourmname){
		echo "$this->username created a new form : $fourmname <br>";
	}
	public function banMember($member){
		echo "$this->username banned the member : $member->username";
	}
	
}

$member = new Member;
$member->username = 'Nirjon Roy';
$member->login();
echo $member->username . " is " . ( $member->logcheck() ? "logged in" : "logged out" ) . "<br>";

$admin = new Admin;
$admin->username = 'Mampy';
$admin->login();
$admin->createFourm('Mampy rn');
$admin->banMember('Abul');

?>