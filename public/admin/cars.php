<?php

/*
File: cars.php
Description: controller for view cars table, admin site 
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Cars";

require __DIR__ . '/../../config_admin.php';

use Capstone\CarsModel;
$model = new CarsModel();

// check if there was a search
if(!empty($_GET['search'])){
	// get cars by search
	$cars = $model->get_cars_by_search($_POST['search']);
}else{
	// get all cars
	$cars = $model->all_cars();
}

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/cars.php';