<?php

/*
File: env.php
Description: defines LOCAL environment and error reporting
Author: Alexandr Pasko
 */ 

// DEVELOPMENT(local) or PRODUCTION(on live server)
define('ENV', 'DEVELOPMENT');

// error reporting (should be on development version only)
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);