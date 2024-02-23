<?php

/*
File: config.php
Description: file with basic configurations that might be needed on every page
Author: Alexandr Pasko
 */ 

require __DIR__ . '/env.php';
require __DIR__ . '/vendor/autoload.php';

// access to basic functions
require __DIR__ . '/functions.php';

//start a session, this allows us to save data and access it on another page
session_start();

//if there errors(form), get thm out so we can use them easily
if(isset($_SESSION['errors'])){
	$errors = $_SESSION['errors']; // save errors as an arrow
	$_SESSION['errors'] = []; //clear session errors
}else{
	$errors = [];
}

// if there are post values, get them out so we can use them easily
if(isset($_SESSION['post'])){
	$post = $_SESSION['post']; // save form values as an arrow
	$_SESSION['post'] = []; //clear session post
}else{
	$post = [];
}

// constant is a value that cannot be changed after it is set
define('GST',0.5);

// define DB connection parameters
//define('DB_DSN', 'mysql:host=localhost;dbname=books');
//define('DB_USER', 'root');
//define('DB_PASS', '');

if(ENV === 'DEVELOPMENT'){
	define('DB_DSN', 'mysql:host=localhost;dbname=luxury_cars');
	define('DB_USER', 'root');
	define('DB_PASS', '');
}

if(ENV === 'PRODUCTION'){
	define('DB_DSN', 'mysql:host=localhost;dbname=capstone');
	define('DB_USER', 'random_user');
	define('DB_PASS', 'random_password123');
}

//Connect ot MySWL
//mysqli - we can use this option or..
//PDO - we will use this option (resource/object to connect to database)
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //error reporting

//unset($_SESSION['message']);
//unset($_SESSION['class']);

// flash message that whould appear only once
if(!empty($_SESSION['flash_message']) && !empty($_SESSION['flash_class']) ){
	$flash_message = $_SESSION['flash_message'];
	$flash_class = $_SESSION['flash_class'];
	$_SESSION['flash_message'] = [];
	$_SESSION['flash_class'] = [];
}else{
	$flash_message = '';
	$flash_class = '';
}

// test to prevent cross site request fogery
if('POST' === $_SERVER['REQUEST_METHOD']){
	if(empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']){
		die('Unsupported request method');
	}
}

// passing database into Model class and its descendants
//require __DIR__ . '/classes/Model.php';
Capstone\Model::init($dbh);
