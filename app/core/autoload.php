<?php
// loads the classes
spl_autoload_register(
	function($class_name){
		require_once($class_name . '.php');
	}
);
