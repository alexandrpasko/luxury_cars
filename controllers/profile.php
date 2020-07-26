<?php 

/*
File: profile.php
Description: controller for profile page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Welcome';
$heading = 'Wellcome to Luxury!';

use Capstone\ClientsModel;
use Capstone\ReviewsModel;

//chech if client id is set in the session (in form_validation page)
if(empty($_SESSION['client_id'])){
	//need add a message 'Please log in first to view your profile'
	$_SESSION['flash_class'] = 'flash_danger';
	$_SESSION['flash_message'] = 'Please log in first to view your profile';
	header("Location: /index.php?page=login");
	die;
}

$model = new ClientsModel();
$model_reviews = new ReviewsModel();

$client_id = $_SESSION['client_id'];

// result is a record from database
$result = $model->one_user($client_id);

// get reviews written by the user
$reviews = $model_reviews->all_reviews_column('client_id', $client_id);

if($result === false){
	die('We could not find that user');
}

require __DIR__ . '/../views/profile.php';
