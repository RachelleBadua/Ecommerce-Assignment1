<?php
namespace app\core;

class App{

	function __construct(){
		// route the request to the appropriate classes/methods
		$request = $this->parseUrl($_GET['url' ?? '']);

		// default
		$controller = 'Main';
		$method = 'index';
		$params = [];

		// checking if the requested controllwe is in controllers folder
		if(file_exists('app/controllers/' . $request[0] . '.php')){
			// gets the controller name
			$contrller = $request[0];

			// removes the $request[0] element
			unset($request][0]);
		}
		$controller = 'app\\controllers\\' . $controller;
		$controller = new $controller;

		// it checks if the class in the controller and the method exist  
		if(isset($request[1]) & method_exists($controller, $request[1])){
			// sets the value of $method to the method from the url
			$method = $request[1];

			// removes the $request[1] element 
			unset($request[1]);
		}

		// the rest of the values in the array inside $params
		$params = array_values($request);

		// calls the controller methods with parameters, it directs to the method in the Main class.
		call_user_func_array([$controller, $method], $params);
	}

	function parseUrl($url){
		return explode('/', trim($url, '/'));
	}

}