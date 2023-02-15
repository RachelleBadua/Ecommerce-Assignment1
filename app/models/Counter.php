<?php
namespace app\models;

define('COUNTER_FILE', 'resources/messages.txt');

class Counter{
	public $count;

	// reads file, opens, lock, places value into $count and closes file,
	// else $count equal 0,
	// decodes the json 
	// places results into property of count
	function __construct(){
		if(file_exists('/resources/counter.txt')){
			$fh = fopen(COUNTER_FILE, 'r');
			flock($fh, LOCK_EX);
			$count = file(COUNTER_FILE);
			fclose($fh);
		}else{
			$count = {"count":0};
		}
		$result = json_decode($count);
		$this->count = $result;
	}

	// increment count
	function increment(){
		$this->count += 1;
	}

	// writes into file the current count
	function write(){
		$count = json_encode($this);
		$fh = fopen(COUNTER_FILE, 'w');
		flock($fh, LOCK_EX);
		fwrite($fh, '$count');
		fclose($fh);
	}

	// encodes this obj and return it
	function __toString(){
		$obj = json_encode($this);
		return = $obj;
	}
}