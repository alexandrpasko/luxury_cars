<?php

/*
File: leave_review.php
Description: validating and process leave_review request
Author: Alexandr Pasko
 */ 

use Capstone\ReviewsModel;
use Capstone\Validator;

//require __DIR__ . '/../classes/Validator.php';
//this is called in config by vendor/autoload.php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	die('Unsupported request method');
}


// access to ReviewsModel class
$model = new ReviewsModel();

// access to validator
$v = new Capstone\Validator();

// check if fields are not empty
$v->required('stars', esc($_POST['stars']));
$v->required('content', esc($_POST['content']));

// check length of the comment
$v->minLength('content', esc($_POST['content']), 20);
$v->maxLength('content', esc($_POST['content']), 2000);

$errors = $v->errors();

// if there are errors
if (!empty($errors)) {
	$_SESSION['flash_class'] = 'flash_danger';
	$_SESSION['flash_message'] = 'All fields must be valid to leave a review';
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	header('Location: /index.php?page=record&class=visible&car_id=' . $_POST['car_id'] . '#complete_form');
	die;
}
// seems like there are no errors by this point

// create a review in database
$model->create_review(
	esc($_POST['car_id']), 
	esc($_SESSION['client_id']), 
	esc($_POST['stars']), 
	esc($_POST['content'])
);

// set flash message and redirect back
$_SESSION['flash_class'] = 'flash_success';
$_SESSION['flash_message'] = 'You have successfully added a review!';
header("Location:" . $_SERVER['HTTP_REFERER']);
die;