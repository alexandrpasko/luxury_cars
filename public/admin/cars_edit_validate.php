<?php

/*
File: cars_edit_validate.php
Description: update or add a car validation, admin site
Author: Alexandr Pasko
 */ 

require __DIR__ . '/../../config_admin.php';

//check if it is a POST request
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	die('Unsupported request method');
}

// access to validator
use Capstone\Validator;
use Capstone\CarsModel;

$v = new Capstone\Validator();
$model = new Capstone\CarsModel();

// all fields are required
$v->required('make', $_POST['make']);
$v->required('model', $_POST['model']);
$v->required('color', $_POST['color']);
$v->required('body_type', $_POST['body_type']);
$v->required('car_condition', $_POST['car_condition']);
$v->required('year', $_POST['year']);
$v->required('mileage', $_POST['mileage']);
$v->required('price', $_POST['price']);
$v->required('price_rent', $_POST['price_rent']);
$v->required('transmission', $_POST['transmission']);
$v->required('fuel', $_POST['fuel']);
$v->required('for_sale', $_POST['for_sale']);
$v->required('for_rent', $_POST['for_rent']);
$v->required('photo', $_POST['photo']);
$v->required('description', $_POST['description']);

// min length validation
$v->minLength('make', $_POST['make'], 2);
$v->minLength('model', $_POST['model'], 2);
$v->minLength('color', $_POST['color'], 2);
$v->minLength('body_type', $_POST['body_type'], 2);
$v->minLength('year', $_POST['year'], 4);
$v->minLength('mileage', $_POST['mileage'], 1);
$v->minLength('price', $_POST['price'], 2);
$v->minLength('price_rent', $_POST['price_rent'], 2);
$v->minLength('fuel', $_POST['fuel'], 2);
$v->minLength('photo', $_POST['photo'], 2);
$v->minLength('description', $_POST['description'], 10);

// max length validation
$v->maxLength('make', $_POST['make'], 20);
$v->maxLength('model', $_POST['model'], 20);
$v->maxLength('mileage', $_POST['mileage'], 10);
$v->maxLength('price', $_POST['price'], 10);
$v->maxLength('price_rent', $_POST['price_rent'], 7);
$v->maxLength('color', $_POST['color'], 20);
$v->maxLength('body_type', $_POST['body_type'], 20);
$v->maxLength('year', $_POST['year'], 4);
$v->maxLength('fuel', $_POST['fuel'], 20);
$v->maxLength('photo', $_POST['photo'], 40);
$v->maxLength('description', $_POST['description'], 65535);

// validate numbers
$v->number('year', $_POST['year']);
$v->number('mileage', $_POST['mileage']);

// prices should have 2 decimals
$v->decimal('price', $_POST['price'], 2);
$v->decimal('price_rent', $_POST['price_rent'], 2);

// validate year if valid
$v->year_made('year', $_POST['year']);

// check if string photo has "jpg" extention
$v->jpg('photo', $_POST['photo']);

// test and assign proper format
$make = $v->name('make', $_POST['make']);

// get errors from validator
$errors = $v->errors();

// if there are errors
if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['post'] = $_POST;
	$_SESSION['flash_message'] = 'The form information must be valid';
	$_SESSION['flash_class'] = 'flash_danger';

	if(!empty($_GET['car_id'])){ // which means validation for edit page
		// go back to edit page
		header('Location: cars_edit.php?car_id=' . $_GET['car_id']);		
	}else{
		// go back to add car page
		header('Location: car_add.php');				
	}

	die;
}
// seems like there are no errors by this point

if(!empty($_GET['car_id'])){
	// update a row in database
	$model->update_row($_POST['car_id'], $make, $_POST['model'], $_POST['mileage'], $_POST['price'], $_POST['price_rent'], $_POST['color'], $_POST['body_type'], $_POST['car_condition'], $_POST['year'], $_POST['transmission'], $_POST['fuel'], $_POST['photo'], $_POST['description'], $_POST['for_rent'], $_POST['for_sale']);

	$_SESSION['flash_message'] = 'You have successfully updated record!';
	$_SESSION['flash_class'] = 'flash_success';
}else{
	// create a new car to database
	$model->create_car($make, $_POST['model'], $_POST['mileage'], $_POST['price'], $_POST['price_rent'], $_POST['color'], $_POST['body_type'], $_POST['car_condition'], $_POST['year'], $_POST['transmission'], $_POST['fuel'], $_POST['photo'], $_POST['description'], $_POST['for_rent'], $_POST['for_sale']);

	$_SESSION['flash_message'] = 'You have successfully added a new car to database!';
	$_SESSION['flash_class'] = 'flash_success';
}

// redirect to cars.php page to see records
header('Location: cars.php');
die;