<?php 

trait subscriper{
	public function sub(){
		echo "your are subs ";
	}
}
trait contributer{
	public function contributer(){
		echo "you are contributer";
	}
}
trait author{
	public function author(){
		echo "you are author";
	}
}
class member{
	use subscriper, contributer, author;
	public function run(){
		$this->sub();
		$this->contributer();
		$this->author();
	}
}

$authors = new member;
$authors->run();

?>