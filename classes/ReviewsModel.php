<?php

/*
File: ReviewsModel.php
Description: model class for reviews table in database
Author: Alexandr Pasko
 */

namespace Capstone;

class ReviewsModel extends Model
{

	/**
	 * get all reviews
	 * @return array
	 */
	final public function all_reviews()
	{
		// this is an intersect table
		$query = 'SELECT 
				reviews.*,
				clients.first_name as client_first_name,
				clients.last_name as client_last_name,
				cars.make as car_make,
				cars.model as car_model
				FROM 
				reviews
				JOIN cars USING(car_id)
				JOIN clients USING(client_id)
				ORDER BY review_id ASC';

		$stmt = static::$dbh->query($query);
		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * get all reviews where $column = $value
	 * @return array
	 */
	final public function all_reviews_column($column, $value)
	{
		// this is an intersect table
		$query = 'SELECT 
				reviews.*,
				clients.first_name as first_name,
				clients.last_name as last_name,
				cars.make as car_make,
				cars.model as car_model
				FROM 
				reviews
				JOIN cars USING(car_id)
				JOIN clients USING(client_id)
				WHERE ' . $column . ' = :value
				ORDER BY review_id ASC
				';

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':value' => $value
		);
		$stmt->execute($params);
		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * get one review
	 * @param  int   $id 
	 * @return [array]
	 */
	public function one_review(int $id)
	{
		// this is an intersect table
		$query = 'SELECT 
				reviews.*,
				clients.first_name as client_first_name,
				clients.last_name as client_last_name,
				cars.make as car_make,
				cars.model as car_model
				FROM 
				reviews
				JOIN cars USING(car_id)
				JOIN clients USING(client_id)
				WHERE review_id = :id
				ORDER BY review_id ASC';

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * create a new review in database
	 * @param  integer $car_id
	 * @param  integer $client_id
	 * @param  integer $stars
	 * @param  string $content
	 */
	function create_review($car_id, $client_id, $stars, $content)
	{
		// creating a car in database
		$query = 'INSERT INTO reviews
					(car_id, client_id, stars, content)
					VALUES 
					(:car_id, :client_id, :stars, :content)';

		$stmt = static::$dbh->prepare($query);

		$params = array(
			':car_id' => $car_id,
			':client_id' => $client_id,
			':stars' => $stars,
			':content' => $content
		);

		$stmt->execute($params);
		// Now we should have a new record in mySQL database		
	}

}