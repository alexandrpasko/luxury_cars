<?php

/*
File: index.php
Description: front controller for website (index)
Author: Alexandr Pasko
 */ 

require __DIR__ . '/../config.php';

//this 'try' catches all errors
try {

	// ?page= 
	$allowed = array(
		'catalog',
		'register_validation',
		'home',
		'login',
		'login_validation',
		'logout',
		'profile',
		'record',
		'register',
		'rent',
		'sale',
		'testdrive',
		'test',
		'leave_review'
	);

	//--------------ROUTER------------------------------

	// if a page is provided in get, load it
	if(!empty($_GET['page'])){

		if(in_array($_GET['page'], $allowed)){
			include __DIR__ . '/../controllers/' . $_GET['page'] . '.php';
		}else{
			// set header 404 response
			// output error message
			header('HTTP/1.0 404 Not Found');  // this is standart if page is not exist
			die('<h1>404 Not Found</h1>');
		}
		
	}else{
		// if no page provided in get, load home page by default
		include __DIR__ . '/../controllers/home.php';
	}


}catch(Exception $e){
	dd($e->getMessage());
	dd($e->getTrace());
	//dd($e); //or we can try this instead those two lines
	die;
}
