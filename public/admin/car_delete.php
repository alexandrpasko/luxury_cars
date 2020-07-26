<?php

/*
File: car_delete.php
Description: delete a car process, admin site
Author: Alexandr Pasko
 */ 

require __DIR__ . '/../../config_admin.php';

//check if it is a POST request
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	die('Unsupported request method');
}

use Capstone\CarsModel;
$model = new Capstone\CarsModel();

// car deletion
if(!empty($_POST['car_id'])){
	$model->delete_soft($_POST['car_id']);
	//set flash message
	$_SESSION['flash_message'] = 'You have successfully deleted a car!';
	$_SESSION['flash_class'] = 'flash_success';
}

// redirect to cars.php page to see records
header('Location: cars.php');
die;