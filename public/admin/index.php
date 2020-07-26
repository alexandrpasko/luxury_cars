<?php

/*
File: index.php
Description: controller for index page, admin site
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Dashboard";

require __DIR__ . '/../../config_admin.php';

use Capstone\Model;
$model = new Model();

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/dashboard.php';