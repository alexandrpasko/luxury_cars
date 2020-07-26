<?php

/*
File: rent.php
Description: controller for rent page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Rent';
$heading = 'For Memorable Trips';

use Capstone\CarsModel;
use Capstone\Model;

$model = new CarsModel();
$model_model = new Model();

// define limit and offset
if(!empty($_GET['next'])){
	// load next
	$_SESSION['offset'] = $_SESSION['offset'] + $_SESSION['limit'];
	$_SESSION['sale_page'] ++;
}elseif(!empty($_GET['prev'])){
	$_SESSION['offset'] = $_SESSION['offset'] - $_SESSION['limit'];
	$_SESSION['sale_page'] --;
}else{
	// first load
	$_SESSION['limit'] = 3; // number of rows on a page
	$_SESSION['offset'] = 0; // offset number of rows
	$_SESSION['total_results'] = $model_model->count_rows_conditionally('cars', 'for_rent', 1); // number of rows total
	$_SESSION['sale_page'] = 1; // page number (shown beetween next and prev links)
}

//get cars for rent from database with limit, offset, and condition (for_rent = 1)
$cars = $model->get_cars_limit_condition($_SESSION['limit'], $_SESSION['offset'], 'for_rent', 1);

//get view
require __DIR__ . '/../views/rent.php';