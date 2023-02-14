<?php
namespace app\controllers;

class Contact extends \app\core\Controller{

	function index(){
		$this->view('Contact/index');
	}

	function read(){
		$this->view('Contact/read');
	}

	function create(){
		if(isset($_POST['action'])){
			$message = new \app\models\Message();
			$message->message = $_POST['message'];
			$message->email = $_POST['email'];
			$message->IP = $_SERVER['REMOTE_ADDR'];

			$message->write();

			

			header('location:/Contact/read');
		}
	} 
}