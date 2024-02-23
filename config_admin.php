<?php

/*
File: config_admin.php
Description: mainly test for authentication; then requires main config file
Author: Alexandr Pasko
 */

use Capstone\Model;

require __DIR__ . '/config.php'; // get main config file

// need this to test user in database
$model = new Model();

// test if user is authenticated and has admin rights in two steps
if(!auth()){
	//is authenticated?
	$_SESSION['flash_message'] = 'Please login with admin credentials';
	$_SESSION['flash_class'] = 'flash_danger';
	header('Location: /../index.php?page=login');
	die;
}else{
	// has admin rights?
	$test = $model->test_boolean('clients', 'admin', 'client_id', $_SESSION['client_id']);
	if($test == false){
		unset($_SESSION['client_id']);
		session_regenerate_id();
		$_SESSION['flash_message'] = 'Please login with admin credentials';
		$_SESSION['flash_class'] = 'flash_danger';
		header('Location: /../index.php?page=login');
		die;
	}
}