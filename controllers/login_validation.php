<?php

/*
File: login_validation.php
Description: validating and process login request
Author: Alexandr Pasko
 */ 

use Capstone\ClientsModel;
use Capstone\Model;
use Capstone\Validator;

//require __DIR__ . '/../classes/Validator.php';
//this is called in config by vendor/autoload.php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	die('Unsupported request method');
}

// access to ClientsModel class
$model = new ClientsModel();

// access to base Model
$admin = new Model();

// access to validator
$v = new Capstone\Validator();

// make basic validation before checking a user in database
$v->required('email', esc($_POST['email']));
$v->required('password', esc($_POST['password']));
$v->maxLength('password', esc($_POST['password']), 255);
$v->maxLength('email', esc($_POST['email']), 50);
$v->email('email', esc($_POST['email']));
//$v->emailUnique('email', email_exists(esc($_POST['email'])) ); // checks database

$errors = $v->errors();

// if there are errors
if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header('Location: /index.php?page=login');
	die;
}
// seems like there are no errors by this point

//gets users info from database
$user = $model->get_user_by_email($_POST['email']);

//check if user with given email exists, if not show the message
if(empty($user)){
	$_SESSION['post'] = $_POST;
	$_SESSION['flash_class'] = 'flash_danger';
	$_SESSION['flash_message'] = "Sorry, your credentials don't match our records";
	header('Location: /index.php?page=login');
	die;
}

//compare password with password in database
if(password_verify($_POST['password'], $user['password'])){
	$_SESSION['client_id'] = $user['client_id'];
	$_SESSION['flash_class'] = 'flash_success';
	$_SESSION['flash_message'] = 'Welcome back, ' . $user['first_name'] . '. You have successfully logged in to our website!';
	session_regenerate_id();
	if($admin->test_boolean('clients', 'admin', 'client_id', $_SESSION['client_id'])){
		// tests if loged in user is admin
		header('Location: /admin'); // where came from with purpose
	}elseif(!empty($_SESSION['target'])){ 
		// checks if registers with a purpose or not
		header('Location: ' . $_SESSION['target']); // where came from with purpose
		$_SESSION['target'] = '';
	}else{
		header('Location: /index.php?page=profile'); // default
	}
	die;	
}else{
	// need to pass post values
	$_SESSION['post'] = $_POST;
	$_SESSION['flash_class'] = 'flash_danger';
	$_SESSION['flash_message'] = "Sorry, your credentials don't match our records";
	header('Location: /index.php?page=login');
	die;
}