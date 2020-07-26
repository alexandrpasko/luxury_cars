<?php

/*
File: reviews.php
Description: controller for view reviews table, admin site 
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Reviews";

require __DIR__ . '/../../config_admin.php';

use Capstone\ReviewsModel;
$model = new ReviewsModel();

// get all users
$reviews = $model->all_reviews();

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/reviews.php';