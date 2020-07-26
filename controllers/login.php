<?php

/*
File: login.php
Description: controller for login page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Login';
$heading = 'Login To Your Account';

//if user is already authentificated redirect to profile page
if(!empty($_SESSION['client_id'])){
	header('Location: /index.php?page=profile');
	die;
}

// check if user logins with a purpose on a specific page
if(!empty($_GET['target']) && empty($_SESSION['target'])){
	$_SESSION['target'] = $_SERVER['HTTP_REFERER']; // redirect to this page eventually
}

//if there are errors in session get them and post info
if(!empty($_SESSION['errors'])){
	$errors = $_SESSION['errors'];
	$post = $_SESSION['post'];
	$_SESSION = [];
}

require __DIR__ . '/../views/login.php';
