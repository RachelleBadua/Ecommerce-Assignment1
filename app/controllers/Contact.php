<?php
namespace app\controllers;

class Contact extends \app\core\Controller{

	// views the index page for Contact
	function index(){
		// when 'action' is clicked it checks if it's null and if it's not
		// 	it will create an object with the data and write to the txt file.
		if(isset($_POST['action'])){
			$message = new \app\models\Message();
			$message->message = $_POST['message'];
			$message->email = $_POST['email'];
			$message->IP = $_SERVER['REMOTE_ADDR'];

			$message->write();

			header('location:/Contact/read'); // redirect to the read page
		}
		$this->view('Contact/index');
	}

	// reads from the txt file and passes the data to the view read()
	function read(){
		$message = new \app\models\Message();
		$contents = $message->read();
		$this->view('Contact/read', $contents);
	}
}