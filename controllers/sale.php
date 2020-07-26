<?php

/*
File: sale.php
Description: controller for sale page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Sale';
$heading = 'Make Every Mile Count';

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
	$_SESSION['limit'] = 6; // number of rows on a page
	$_SESSION['offset'] = 0; // offset number of rows
	$_SESSION['total_results'] = $model_model->count_rows('cars'); // number of rows total
	$_SESSION['sale_page'] = 1; // page number (shown beetween next and prev links)
}

//get cars for sale from database with limit and offset
$cars = $model->get_cars_limit($_SESSION['limit'], $_SESSION['offset']);

require __DIR__ . '/../views/sale.php';