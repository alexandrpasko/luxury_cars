<?php

/*
File: car_edit.php
Description: controller for edit car page, admin site
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Edit Car";

require __DIR__ . '/../../config_admin.php';

use Capstone\CarsModel;

$model = new CarsModel();

$car = $model->one_car($_GET['car_id']);

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/cars_edit.php';