<?php

/*
File: catalog.php
Description: controller for catalog page
Author: Alexandr Pasko
 */ 

$title = 'Luxury Cars Catalog';
$heading = 'Beauty Is Not Enough';

// prevents ERR_CACHE_MISS (error when go back on page and asks to reload a page with $_POST data)
header('Cache-Control: no cache');

use Capstone\CarsModel;

$model = new CarsModel();

// first check if cars were searched by search or filter
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(!empty($_POST['search'])){
		// get cars by search function
		$cars = $model->get_cars_by_search($_POST['search']);

		// if nothing found by search send back
		if(empty($cars)){
			$_SESSION['flash_class'] = 'flash_danger';
			$_SESSION['flash_message'] = 'Nothing was found by search term "' . $_POST['search'] . '"';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die;	
		}
	}elseif(!empty($_GET['filter'])){

		// get cars using filters
		$cars = $model->get_cars_filter(
			esc_attr($_POST['make']), 
			esc_attr($_POST['body_type']), 
			esc_attr($_POST['transmission']), 
			esc_attr($_POST['car_condition']), 
			esc_attr($_POST['min_price']), 
			esc_attr($_POST['max_price']), 
			esc_attr($_POST['sort_by'])
		);

		// count filters and note what filters involved
		$filters_number = 0;
		$filters_fields = [];

		if($_POST['make'] != ''){
			$filters_number++;
			$filters_fields[] = 'make';
		}
		if($_POST['body_type'] != ''){
			$filters_number++;
			$filters_fields[] = 'body type';
		}
		if($_POST['transmission'] != ''){
			$filters_number++;
			$filters_fields[] = 'transmission';
		}
		if($_POST['car_condition'] != ''){
			$filters_number++;
			$filters_fields[] = 'car condition';
		}
		if($_POST['min_price'] != '1'){
			$filters_number++;
			$filters_fields[] = 'minimum price';
		}
		if($_POST['max_price'] != '9999999'){
			$filters_number++;
			$filters_fields[] = 'maximum price';
		}
		if($_POST['sort_by'] != 'default'){
			$filters_number++;
			$filters_fields[] = 'sort by';
		}

	}else{
		// if search request was empty
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		die;
	}
}else{
	//get all cars from database
	$cars = $model->all_cars();
}

// get selection for filters
$makes = $model->distinct_results('make');
$body_types = $model->distinct_results('body_type');
$transmissions = $model->distinct_results('transmission');

require __DIR__ . '/../views/catalog.php';