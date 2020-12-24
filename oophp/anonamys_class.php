<?php
 
// a message to pass to the constructor
$message = "This is a log messagen";
 
// create a new anonymous class, and pass the message as an arguement to the constructor
$test = (new class( $message ) {
        public function __construct( $message )
        {
                // echo the message
                echo $message;
        }
        public function log($msg){
            return $msg;
        }
});
 
echo $test->log("This is not a love song!");
?>