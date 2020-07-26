<?php

namespace Capstone;

/*
File: ClientsModel.php
Description: model class for clients table in database
Author: Alexandr Pasko
 */ 

class ClientsModel extends Model
{

	/**
	 * get all from specified table in the database
	 * @param  [string] $table
	 * @return [array]
	 */
	final public function all_users()
	{
		$query = "SELECT * FROM clients";
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

		/**
	 * get a row from specified table
	 * @param  [string] $table   [name of the table]
	 * @param  [string] $id_name [name of id attribute]
	 * @param  int    $id     
	 * @return [array]       
	 */
	public function one_user(int $id)
	{
		$query = "SELECT * FROM clients WHERE client_id = :id";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * get user's info based on existing email
	 * @param  string $value (user's email)
	 * @return array $user
	 */
	function get_user_by_email($value)
	{
		//global $dbh;

		$query = 'SELECT *
					FROM clients
					WHERE email = :email';

		$stmt = static::$dbh->prepare($query);
		$params = array (
			':email' => $value
		);
		$stmt->execute($params);
		$user = $stmt->fetch(\PDO::FETCH_ASSOC);
		
		return $user;
	}

	/**
	 * checks if email is already exists in database
	 * @param  string $value 
	 * @return email from database if exists, othervise empty
	 */
	function email_exists($email)
	{
		//global $dbh;

		$query = 'SELECT email
					FROM clients
					WHERE email = :email';

		$stmt = static::$dbh->prepare($query);
		$params = array (
			':email' => $email
		);
		$stmt->execute($params);
		$email = $stmt->fetch(\PDO::FETCH_ASSOC);
		
		return $email;
	}

	/**
	 * save a user into database and return his client_id
	 * @param  [string] $first_name  
	 * @param  [string] $last_name   
	 * @param  [string] $email       
	 * @param  [string] $phone       
	 * @param  [string] $password    
	 * @param  [string] $street      
	 * @param  [string] $city        
	 * @param  [string] $postal_code 
	 * @param  [string] $province    
	 * @param  [string] $country     
	 * @return [integer] $client_id (just inserted)
	 */
	function save_user_get_id($first_name, $last_name, $email, $phone, $password, $street, $city, $postal_code, $province, $country)
	{
		//global $dbh;
		
		// creating a client in database
		$query = 'INSERT INTO clients
					(first_name, last_name, email, phone, password, street, city, postal_code, province, country)
					VALUES 
					(:first_name, :last_name, :email, :phone, :password, :street, :city, :postal_code, :province, :country)';

		$stmt = static::$dbh->prepare($query);

		$params = array(
			':first_name' => $first_name,
			':last_name' => $last_name,
			':email' => $email,
			':phone' => $phone,
			':password' => set_password($password),
			':street' => $street,
			':city' => $city,
			':postal_code' => $postal_code,
			':province' => $province,
			':country' => $country
		);

		$stmt->execute($params);
		// Now we should have a new record in mySQL database

		// get the client_id which just have been saved
		$client_id = static::$dbh->lastInsertId();

		return $client_id;
	}

}