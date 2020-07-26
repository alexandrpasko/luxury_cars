<?php

/*
File: register_validation.php
Description: validating and process register request
Author: Alexandr Pasko
 */ 

use Capstone\ClientsModel;
use Capstone\Validator;

$model = new ClientsModel();

//require __DIR__ . '/../classes/Validator.php';
//this is called in config by vendor/autoload.php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	die('Unsupported request method');
}

// access to validator
$v = new Capstone\Validator();

// make all validation before inserting a user into database
$v->required('first_name', esc($_POST['first_name']));
$v->required('last_name', esc($_POST['last_name']));
$v->required('email', esc($_POST['email']));
$v->required('phone', esc($_POST['phone']));
$v->required('password', esc($_POST['password']));
$v->required('street', esc($_POST['street']));
$v->required('city', esc($_POST['city']));
$v->required('postal_code', esc($_POST['postal_code']));
$v->required('province', esc($_POST['province']));
$v->required('country', esc($_POST['country']));

$v->minLength('first_name', esc($_POST['first_name']), 2);
$v->minLength('last_name', esc($_POST['last_name']), 2);
$v->minLength('street', esc($_POST['street']), 2);
$v->minLength('city', esc($_POST['city']), 2);
$v->minLength('province', esc($_POST['province']), 2);
$v->minLength('country', esc($_POST['country']), 2);
$v->minLength('password', esc($_POST['password']), 6);

$v->maxLength('first_name', esc($_POST['first_name']), 20);
$v->maxLength('last_name', esc($_POST['last_name']), 20);
$v->maxLength('street', esc($_POST['street']), 40);
$v->maxLength('city', esc($_POST['city']), 20);
$v->maxLength('province', esc($_POST['province']), 20);
$v->maxLength('country', esc($_POST['country']), 20);
$v->maxLength('password', esc($_POST['password']), 255);
$v->maxLength('email', esc($_POST['email']), 50);

$v->email('email', esc($_POST['email']));

$v->password('password', esc($_POST['password']));
$v->passwordConfirm('password_confirm', esc($_POST['password']), esc($_POST['password_confirm'] ));

$postal_code = $v->postalCode('postal_code', esc($_POST['postal_code']));

$phone = $v->phone('phone', esc($_POST['phone']));

$first_name = $v->name('first_name', esc($_POST['first_name']));
$last_name = $v->name('last_name', esc($_POST['last_name']));
$city = $v->name('city', esc($_POST['city']));
$province = $v->name('province', esc($_POST['province']));
$country = $v->name('country', esc($_POST['country']));

$errors = $v->errors();

// if there are errors
if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header('Location: /index.php?page=register');
	die;
}
// seems like there are no errors by this point

//extra validation, check if user's email is not in database already
$v->emailUnique('email', $model->email_exists(esc($_POST['email'])) ); // checks database
$errors = $v->errors();
if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header('Location: /index.php?page=register');
	die;
}
// email is unique

// create a client in database and get his id
$client_id = $model->save_user_get_id(
	$first_name, 
	$last_name, 
	esc($_POST['email']), 
	$phone, 
	esc($_POST['password']), 
	esc($_POST['street']), 
	$city, 
	$postal_code, 
	$province, 
	$country
);

// Redirect to new page to show record
if($client_id > 0) {
	$_SESSION['client_id'] = $client_id;
	$_SESSION['flash_class'] = 'flash_success';
	$_SESSION['flash_message'] = 'Welcome , ' . $first_name . '. You have successfully registered into our website!';	
	session_regenerate_id();
	// check if registers with a purpose or not
	if(!empty($_SESSION['target'])){
		header('Location: ' . $_SESSION['target']); // where came from with purpose
		$_SESSION['target'] = '';		
	}else{
		header('Location: /index.php?page=profile'); // default
	}
	die;
}else{
	die('There was a problem saving a new user');
}