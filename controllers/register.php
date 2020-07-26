<?php 

/*
File: register.php
Description: controller for register page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Register';
$heading = 'Register to Our Website';

// check if user tries to register with a purpose on a specific page
if(!empty($_GET['target']) && empty($_SESSION['target'])){
	$_SESSION['target'] = $_SERVER['HTTP_REFERER']; // redirect to this page eventually
}

if(!empty($_SESSION['errors'])){
$errors = $_SESSION['errors'];
$post = $_SESSION['post'];
$_SESSION = [];
}

require __DIR__ . '/../views/register.php';
