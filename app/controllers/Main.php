<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	// views the index of Main controller
	function index(){
		$this->view('Main/index');
	}

	// views the about_us of Main controller
	function about_us(){
		$this->view('Main/about_us');
	}
}