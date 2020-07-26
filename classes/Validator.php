<?php

/*
File: Validator.php
Description: validator class, mainly used for form validation
Author: Alexandr Pasko
 */ 

namespace Capstone;

class Validator
{
	// array to hold errors
	private $errors = [];

	/**
	 * validate if empty
	 * @param  string $field
	 * @param  string $value
	 */
	public function required($field, $value)
	{
		if(empty($value) && $value !== '0'){
			$this->setError($field, $this->label($field) . ' is a required field');
		}
	}

	/**
	 * validate email by filter_var
	 * @param  string $field
	 * @param  string $value
	 */
	public function email($field, $value)
	{
		if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)){
			$this->setError($field, $this->label($field) . ' must be a valid email address');
		}
	}

	/**
	 * check if email exists in database
	 * @param  string $field            
	 * @param  array $checkedInDatabase (checked in database by model form_validation.php)
	 */
	public function emailUnique($field, $checkedInDatabase)
	{
		if(!empty($checkedInDatabase)){
			$this->setError($field, 'This email already exists. Please login or use another email.');
			$_SESSION['flash_message'] = 'This email already exists. Please login or use another email.';
			$_SESSION['flash_class'] = 'flash_danger';
		}
	}

	/**
	 * validate for minimum string length
	 * @param  string $field
	 * @param  string $value
	 * @param  integer $len
	 */
	public function minLength($field, $value, $len)
	{
		if (strlen($value) < $len) {
			$this->setError($field, $this->label($field) . " must have a minimum length of $len characters");
		}
	}

	/**
	 * validate for maximum string length
	 * @param  string $field
	 * @param  string $value
	 * @param  integer $len
	 */
	public function maxLength($field, $value, $len)
	{
		if (strlen($value) > $len) {
			$this->setError($field, $this->label($field) . " must have a maximum length of $len characters");
		}
	}

	/**
	 * validate postal code by regex
	 * @param  string $field
	 * @param  string $value
	 * @return string formatted postal code
	 */
	public function postalCode($field, $value)
	{
		$pattern = '/^[\(]?([a-zA-Z][0-9][a-zA-Z])[\-\s]?([0-9][a-zA-Z][0-9])[\)]?[\s]*$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must be a valid Canadian postal code");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}else{
			return strtoupper($matches[1]) . ' ' . strtoupper($matches[2]);
		}
	}

		/**
	 * validate phone by regex
	 * @param  string $field
	 * @param  string $value
	 * @return string formatted phone number
	 */
	public function phone($field, $value)
	{
		$pattern = '/^([\+][0-9])?[\s]?[\(]?([0-9]{3})[\)]?[\s\-]?([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})[\s]*$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must be a valid phone number");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}else{
			return '(' . $matches[2] . ')' . ' ' . $matches[3] . '-' . $matches[4] . $matches[5];
		}
	}

		/**
	 * validate names by regex excludes numbers and special characters except space or hyphen
	 * @param  string $field
	 * @param  string $value
	 * @return string name (Uppercase)
	 */
	public function name($field, $value)
	{
		$pattern = '/^[A-Z]?[a-zA-Z]*[\s\-]?[a-zA-Z]*[\s]*$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " cannot contain any numbers or special characters except spase or hyphen");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}else{
			return ucwords($value);
		}
	}

		/**
	 * validate password strength
	 * @param  string $field
	 * @param  string $value
	 */
	public function password($field, $value)
	{
		$pattern = '/(?=.*[\!\@\#\$\%\^\&\*\-\_\+\=]+)(?=.*[\d]+)(?=.*[A-Z]+).{6,}/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must contain at least one uppercase letter, one digit, and one special character");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}
	}

	/**
	 * validate password confirm
	 * @param  string $field   
	 * @param  string $value [password entered]
	 * @param  string $confirm [password repeated]
	 */
	public function passwordConfirm($field, $value, $confirm)
	{
		if(!empty($value)){
			if ($value !== $confirm) {
				$this->setError($field, "This field must match your password");
			}
		}
	}

	/**
	 * validate if year is valid (1900 - current)
	 * @param  [string] $field 
	 * @param  [integer] $value (year)
	 */
	public function year_made($field, $value)
	{
		if ($value < 1900 || $value > date('Y')) {
			$this->setError($field, $this->label($field) . " must be a valid year");
		}		
	}

	/**
	 * check if a number
	 * @param  string $field
	 * @param  $value (should be an integer to validate)
	 */
	public function number($field, $value)
	{
		$pattern = '/^[0-9]+$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must be a number");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}
	}

	/**
	 * check if string has .jpg extention
	 * @param  string $field 
	 * @param  string $value 
	 */
	public function jpg($field, $value)
	{
		$pattern = '/^[a-zA-Z1-9\_\-\@\#\%\*\+\!\?\$\&\(\)]+(\.jpg)$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must have \".jpg\" extention");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}
	}

	/**
	 * check for decimals
	 * @param  string $field 
	 * @param  string $value 
	 * @param  integer $number
	 */
	public function decimal($field, $value, $number)
	{
		$pattern = '/^[0-9]+[\.]{1}[0-9]{' . $number . '}$/';
		$test = preg_match($pattern, $value, $matches);
		if ($test === 0) {
			$this->setError($field, $this->label($field) . " must have " . $number . " decimals");
		}elseif ($test === false) {
			throw new Exception('There was a problem with this pattern test');
		}
	}

	/**
	 * set an error in the errors array
	 * @param string $field 
	 * @param string $message
	 */
	private function setError($field, $message)
	{
		if(empty($this->errors[$field])){
			$this->errors[$field] = $message;
			//dd($field);
			//dd($this->errors);
			//die;
		}
	}

	/**
	 * getter method for $errors property
	 * @return array
	 */
	public function errors()
	{
		return $this->errors;
	}

	/**
	 * split and uppercase field name
	 * @param  string $field
	 * @return string
	 */
	private function label($field)
	{
		//first_name First Name
		$label = str_replace('_', ' ', $field); //replace
		$label = ucwords($label); // uppercase
		return $label;
	}


}

