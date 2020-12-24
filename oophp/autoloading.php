<?php 


spl_autoload_register(function($class_name){
	if(file_exists("classes/$class_name.php")){
	include "classes/$class_name.php";
	// include 'classes/$class_name.php';
	}
	else{
		throw new Exception("Error Processing Request");
		
	}

});

try{
new member;
new notExit;
}
catch(Exception $e){
    echo $e->getMessage(), "\n";

}

// new member;
// echo "<br/>";
// new topic;



?>