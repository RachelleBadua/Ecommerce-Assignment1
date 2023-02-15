<?php
namespace app\controllers;

// makes a new object of Counter, increments, write to file and echo result
// I was not able to do it beacuse I was confuse with ajax 
class Count{
	function index(){
		$counter = new \app\models\Counter();
		$counter->increment();
		$counter->write();
		echo "$counter";
	}
}