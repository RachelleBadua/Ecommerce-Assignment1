<?php
namespace app\core;

class Controller{
	// when given a file, it can be displayed on the end user, so it can outputted
	function views($name, $data = []){
		include('app/views/' . $name '.php');
	}
}