<?php
namespace app\models

define('MESSAGES_FILE', 'massages.txt');

class Message{
	public $message;
	public $email;
	public $IP;

	public function read(){
		$contents = file(MESSAGES_FILE);
		return $contents;
	}

	public function write(){
		$message = json_encode($this);
		$fh = fopen(MESSAGES_FILE, 'a');
		flock($fh, LOCK_EX);
		fwrite($fh, "$message\n");
		fclose($fh);
	}


}