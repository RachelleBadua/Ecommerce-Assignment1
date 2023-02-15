<?php
namespace app\models;

define('MESSAGES_FILE', 'resources/messages.txt');

class Message{
	public $message;
	public $email;
	public $IP;

	// reads the txt file and places the object of message into an array and returns it
	public function read(){
		$contents = file(MESSAGES_FILE);
		return $contents;
	}

	// writes to the txt file (encode ad json, open, lock, write, close)
	public function write(){
		$message = json_encode($this);
		$fh = fopen(MESSAGES_FILE, 'a');
		flock($fh, LOCK_EX);
		fwrite($fh, "$message\n");
		fclose($fh);
	}
}