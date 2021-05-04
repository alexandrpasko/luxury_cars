<?php

/*
File: functions.php
Description: basic functions that might be needed on some pages
Author: Alexandr Pasko
 */ 

/**
 * [esc description]
 * @param  mixed $var variable to dump
 * @return  [type] [description]     
 */
function dd($var)
{
	echo '<pre>';

	print_r($var);

	echo '</pre>';
}

//safely escape possibly tainted strings
/**
 * [esc description]
 * @param  string $string 
 * @return string       
 */
function esc($string)
{
	return htmlentities($string, null, "UTF-8");
}

//converting special characters to entities where the string might be inside quotes (as html attribute for example)
/**
 * [esc description]
 * @param  string $string 
 * @return string       
 */
function esc_attr($string)
{
	// string, escaping quotes, ...
	return htmlentities($string, ENT_QUOTES, "UTF-8");
}

/**
 * get old value from array for output to form
 * @param  string $field field name
 * @param  array $array the array to get the field value from
 * @return string the field value
 */
function old($field, $array)
{
	if(isset($array[$field]) && strlen($array[$field]) > 0){
		return $array[$field];
	}else{
		return '';
	}
}

function label($field)
{
	//first_name First Name
	$label = str_replace('_', ' ', $field); //replace
	$label = ucwords($label); // uppercase
	return $label;
}

/**
 * change float to int with comas
 * @param  float $float (ex: 333333.00)
 * @return string $price (ex: 333,333)
 */
function price($float)
{
	$price = number_format($float, 0);
	return $price;
}

/**
 * encrypt password before saving it to database
 * @param string $field 
 * @param string $value has to be validated before
 */
function set_password($value)
{
	$encrypted_password = password_hash($value, PASSWORD_DEFAULT);
	return $encrypted_password;
}

/**
 * convert array to string with commas between
 * @param  array $array
 * @return string 
 */
function array_to_string_values($array)
{
	$string = '';

	foreach($array as $value){
		$string .= $value . ', ';
	}
	// get last comma out
	$string = substr($string, 0, -2);

	return $string;
}

/**
 * test if user is authenticated
 * @return boolean
 */
function auth()
{
	if(isset($_SESSION['client_id']) && $_SESSION['client_id'] > 0){
		return true;
	}else{
		return false;
	}
}

/**
 * create or return (if already exists in session) csrf_token flag
 * @return string
 */
function create_csrf_token()
{
	if(!empty($_SESSION['csrf_token'])){
		return $_SESSION['csrf_token'];
	}else{
		$_SESSION['csrf_token'] = md5(uniqid() . time());
		return $_SESSION['csrf_token'];
	}
}