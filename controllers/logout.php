<?php

/*
File: logout.php
Description: process logout request
Author: Alexandr Pasko
 */ 

unset($_SESSION['client_id']);

$_SESSION['flash_class'] = 'flash_success';
$_SESSION['flash_message'] = "You have successfully logged out!";

session_regenerate_id();

//send back to the parent page unless logout from admin website or from profile page
//need substr() to make it work on any server
if(!empty($_GET['logout_admin'])){
	// if logout from admin site
	header('Location: /index.php?page=login');
}elseif(substr($_SERVER['HTTP_REFERER'], -23) !== '/index.php?page=profile'){
	// return to referrer page (if not admin and not profile page)
	$location = str_replace("&class=visible","", $_SERVER['HTTP_REFERER']); // prevent target visibility
	$location = str_replace("&style=visible","", $location); // prevent target visibility
	header('Location: ' . $location);
}else{
	// if logout from profile page
	header('Location: /');
}

die;