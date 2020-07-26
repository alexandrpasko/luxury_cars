<?php

/*
File: car_add.php
Description: controller for admin site, car_add page
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Create";

require __DIR__ . '/../../config_admin.php';

use Capstone\CarsModel;
$model = new CarsModel();

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/car_add.php';