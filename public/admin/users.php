<?php

/*
File: users.php
Description: controller for view clients table, admin site 
Author: Alexandr Pasko
 */ 

$title = "Luxury Cars Admin Users";

require __DIR__ . '/../../config_admin.php';

use Capstone\ClientsModel;
$model = new ClientsModel();

// get all users
$users = $model->all_users();

// get view
require __DIR__ . '/views/includes/head_inc.php';
require __DIR__ . '/views/users.php';