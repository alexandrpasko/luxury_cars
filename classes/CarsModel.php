<?php

/*
File: CarsModel.php
Description: model class for primary table "cars" in database
Author: Alexandr Pasko
 */ 

namespace Capstone;

class CarsModel extends Model
{

	/**
	 * get all from specified table in the database
	 * @param  [string] $table
	 * @return [array]
	 */
	final public function all_cars()
	{
		$query = "SELECT * FROM cars WHERE deleted = 0 ORDER BY car_id ASC";
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
	public function one_car(int $id)
	{
		$query = "SELECT * FROM cars WHERE car_id = :id AND deleted = 0";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * [get cars available for sale]
	 * @param  [integer] $limit (how many load)
	 * @param  [integer] $offset (how many escape first)
	 * @return [array] $cars 
	 */
	function get_cars_limit($limit, $offset)
	{

		$query = 'SELECT * FROM cars WHERE deleted = 0 ORDER BY car_id ASC LIMIT ' . $limit . ' OFFSET ' . $offset;
		$stmt = static::$dbh->query($query);
		$stmt->execute();
		$cars = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	    return $cars;
	}

	/**
	 * get cars with limit, offset, and condition
	 * @param  integer $limit    
	 * @param  integer $offset   
	 * @param  string $column
	 * @param  (whatever is expected by database) $condition
	 * @return array        
	 */
	function get_cars_limit_condition($limit, $offset, $column, $condition)
	{

		$query = 'SELECT * FROM cars WHERE deleted = 0 
			AND ' . $column . ' = :condition ORDER BY car_id ASC LIMIT ' . $limit . ' OFFSET ' . $offset;
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':condition' => $condition
		);
		$stmt->execute($params);
		$cars = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	    return $cars;
	}

	/**
	 * get cars using filters on a page
	 * @param  string $make
	 * @param  string $body_type
	 * @param  string $transmission
	 * @param  string $car_condition
	 * @param  integer $min_price
	 * @param  integer $max_price
	 * @param  string $sort_by
	 * @return array
	 */
	function get_cars_filter($make, $body_type, $transmission, $car_condition, $min_price, $max_price, $sort_by)
	{
		// get sort statement
		switch ($sort_by) {
		  case "price_asc":
		    $sort = "ORDER BY price ASC";
		    break;
		  case "price_desc":
		    $sort = "ORDER BY price DESC";
		    break;
		  case "year_asc":
		    $sort = "ORDER BY year ASC";
		    break;
		  case "year_desc":
		    $sort = "ORDER BY year DESC";
		    break;					    
		  default:
		    $sort = "";
		};

		$query = 'SELECT * FROM cars WHERE 
					deleted = 0 AND 
					make LIKE "%":make"%" AND 
					body_type LIKE "%":body_type"%" AND 
					transmission LIKE "%":transmission"%" AND 
					car_condition LIKE "%":car_condition"%" AND 
					price >= :min_price AND 
					price <= :max_price ' . $sort;

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':make' => $make,
			':body_type' => $body_type,
			':transmission' => $transmission,
			':car_condition' => $car_condition,
			':min_price' => $min_price,
			':max_price' => $max_price
		);
		$stmt->execute($params);
		$cars = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	    return $cars;
	}

	/**
	 * get all possible options from the table (distinct results)
	 * @param  [string] $field
	 * @return [array]
	 */
	function distinct_results($field)
	{
		$query = "SELECT DISTINCT " . $field . " FROM cars ORDER BY " . $field . " ASC";
		$stmt = static::$dbh->query($query);
		$results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		return $results;
	}

	/**
	 * update a row in database 
	 * @param  integer $car_id  (based on this id)
	 * @param  all other params are table fields
	 */
	function update_row($car_id, $make, $model, $mileage, $price, $price_rent, $color, $body_type, $car_condition, $year, $transmission, $fuel, $photo, $description, $for_rent, $for_sale)
	{
		$query = "UPDATE cars 
				SET 
				make = :make, 
				model = :model,
				mileage = :mileage,
				price = :price,
				price_rent = :price_rent,
				color = :color,
				body_type = :body_type,
				car_condition = :car_condition,
				year = :year,
				transmission = :transmission,
				fuel = :fuel,
				photo = :photo,
				description = :description,
				for_rent = :for_rent,
				for_sale = :for_sale,
				date_updated = current_timestamp()
				WHERE 
				car_id = :car_id";

		$stmt = static::$dbh->prepare($query);

		$params = array (
			':make' => $make,
			':model' => $model,
			':mileage' => $mileage,
			':price' => $price,
			':price_rent' => $price_rent,
			':color' => $color,
			':body_type' => $body_type,
			':car_condition' => $car_condition,
			':year' => $year,
			':transmission' => $transmission,
			':fuel' => $fuel,
			':photo' => $photo,
			':description' => $description,
			':for_rent' => $for_rent,
			':for_sale' => $for_sale,
			':car_id' => $car_id

		);

		$stmt->execute($params);		
	}

	/**
	 * get cars by search
	 * @param  string $searchterm
	 * @return array
	 */
	function get_cars_by_search($searchterm)
	{
		$query = 'SELECT * FROM cars
				WHERE deleted = 0 AND 
				make LIKE :searchterm1
				OR model LIKE :searchterm2
				OR body_type LIKE :searchterm3
				OR car_condition LIKE :searchterm4
				OR description LIKE :searchterm5
				ORDER BY make ASC';

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':searchterm1' => "%{$searchterm}%",
			':searchterm2' => "%{$searchterm}%",
			':searchterm3' => "%{$searchterm}%",
			':searchterm4' => "%{$searchterm}%",
			':searchterm5' => "%{$searchterm}%"
		);
		$stmt->execute($params);
		$result = $stmt->fetchALL(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * create a new car in database
	 * @param  string $make         
	 * @param  string $model         
	 * @param  integer $mileage     
	 * @param  decimal(9,2) $price        
	 * @param  decimal(6,2) $price_rent    
	 * @param  string $color        
	 * @param  string $body_type     
	 * @param  enum('new','used') $car_condition 
	 * @param  integer $year          
	 * @param  enum('manual','automatic') $transmission  
	 * @param  string $fuel  
	 * @param  string $photo  (with '.jpg' extention)     
	 * @param  string $description  
	 * @param  boolean $for_rent      
	 * @param  boolean $for_sale      
	 */
	function create_car($make, $model, $mileage, $price, $price_rent, $color, $body_type, $car_condition, $year, $transmission, $fuel, $photo, $description, $for_rent, $for_sale)
	{
		// creating a car in database
		$query = 'INSERT INTO cars
					(make, model, mileage, price, price_rent, color, body_type, car_condition, year, transmission, fuel, photo, description, for_rent, for_sale)
					VALUES 
					(:make, :model, :mileage, :price, :price_rent, :color, :body_type, :car_condition, :year, :transmission, :fuel, :photo, :description, :for_rent, :for_sale)';

		$stmt = static::$dbh->prepare($query);

		$params = array(
			':make' => $make,
			':model' => $model,
			':mileage' => $mileage,
			':price' => $price,
			':price_rent' => $price_rent,
			':color' => $color,
			':body_type' => $body_type,
			':car_condition' => $car_condition,
			':year' => $year,
			':transmission' => $transmission,
			':fuel' => $fuel,
			':photo' => $photo,
			':description' => $description,
			':for_rent' => $for_rent,
			':for_sale' => $for_sale
		);

		$stmt->execute($params);
		// Now we should have a new record in mySQL database		
	}

	/**
	 * delete a car from database
	 * @param  integer $car_id 
	 */
	function delete($car_id)
	{
		$query = 'DELETE  FROM cars
				WHERE car_id = :car_id';
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':car_id' => $car_id
		);
		$stmt->execute($params);
	}

	/**
	 * delete a car (this is soft delete, meaning - update column deleted = 1). Stays in database
	 * @param  integer $car_id
	 */
	function delete_soft($car_id)
	{
		$query = 'UPDATE cars SET deleted = 1 WHERE car_id = :car_id';
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':car_id' => $car_id
		);
		$stmt->execute($params);
	}

}