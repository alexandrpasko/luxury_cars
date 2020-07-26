<?php 

/*
File: record.php
Description: controller for record page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Description';
$heading = 'Make Every Mile Count';

use Capstone\CarsModel;
use Capstone\ReviewsModel;

//make sure we have car_id to display this page
if(empty($_GET['car_id'])){
	header('Location: /');
	die;
}

// get a single car based on car_id passed
$model = new CarsModel();
$record = $model->one_car($_GET['car_id']);

//get reviews for the car
$model_reviews = new ReviewsModel();
$reviews = $model_reviews->all_reviews_column('car_id', $_GET['car_id']);

if(!empty($_GET['chanel'])){
	$rent = true;
	$_GET = [];
}else{
	$rent = false;
}

require __DIR__ . '/../views/record.php';