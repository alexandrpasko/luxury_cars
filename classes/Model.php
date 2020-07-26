<?php

/*
File: Model.php
Description: main model class for database (base for extended model classes)
Author: Alexandr Pasko
 */ 

namespace Capstone;

class Model
{

	static protected $dbh;
	// cant't use $this with static
	// use self::$dbh   static::$dbh

	static public function init(\PDO $dbh)
	{
		static::$dbh = $dbh;
	}

	/**
	 * get all from specified table in the database
	 * @param  [string] $table
	 * @return [array]
	 */
	final public function all($table)
	{
		$query = "SELECT * FROM " . $table;
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
	final public function one($table, $id_name, int $id)
	{
		$query = "SELECT * FROM " . $table . " WHERE " . $id_name . " = :id";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result;
	}

	/**
	 * count rows in a table
	 * @param  string $table (table in database)
	 * @return integer
	 */
	final public function count_rows($table)
	{
		$query = "SELECT COUNT(*) FROM " . $table;
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result['COUNT(*)'];
	}

	/**
	 * count rows with condition (WHERE)
	 * @param  string $table    
	 * @param  string $column   
	 * @param  $condition (whatever is expected as value)
	 * @return integer
	 */
	final public function count_rows_conditionally($table, $column, $condition)
	{
		$query = "SELECT COUNT(*) FROM " . $table . " WHERE " . $column . " = :condition";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':condition' => $condition
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result['COUNT(*)'];
	}

	/**
	 * count rows where doesn't equal condition (WHERE)
	 * @param  string $table    
	 * @param  string $column   
	 * @param  $condition (whatever is expected as value)
	 * @return integer
	 */
	final public function count_rows_conditionally_negation($table, $column, $condition)
	{
		$query = "SELECT COUNT(*) FROM " . $table . " WHERE " . $column . " != :condition";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':condition' => $condition
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result['COUNT(*)'];
	}

	/**
	 * get number of rows distincted by a column
	 * @param  string $table
	 * @param  string $column
	 * @return integer
	 */
	final public function count_rows_distinct($table, $column)
	{
		$query = "SELECT COUNT(DISTINCT " . $column . ") FROM " . $table;
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return $result['COUNT(DISTINCT ' . $column . ')'];
	}

	/**
	 * get average in column and return that with certain decimals
	 * @param  string $table  
	 * @param  string $column  
	 * @param  integer $decimals
	 * @return float       
	 */
	final public function get_average($table, $column, $decimals)
	{
		$query = "SELECT AVG(" . $column . ") from " . $table;
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return number_format($result['AVG(' . $column . ')'], $decimals);
	}

	/**
	 * get lowest in column and return that with certain decimals
	 * @param  string $table
	 * @param  string $column
	 * @param  integer $decimals
	 * @return float
	 */
	final public function get_lowest($table, $column, $decimals)
	{
		$query = "SELECT MIN(" . $column . ") from " . $table;
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return number_format($result['MIN(' . $column . ')'], $decimals);
	}

	/**
	 * get highest in column and return that with certain decimals
	 * @param  string $table
	 * @param  string $column
	 * @param  integer $decimals
	 * @return float
	 */
	final public function get_highest($table, $column, $decimals)
	{
		$query = "SELECT MAX(" . $column . ") from " . $table;
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		return number_format($result['MAX(' . $column . ')'], $decimals);
	}

	/**
	 * test boolean in any table and any column
	 * @param  string $table
	 * @param  string $test_column
	 * @param  string $condition_column
	 * @param  whatever is expected $condition_value
	 * @return boolean
	 */
	public function test_boolean($table, $test_column, $condition_column, $condition_value)
	{
		$query = "SELECT " . $test_column ." FROM " . $table . " WHERE " . $condition_column . " = :condition_value";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':condition_value' => $condition_value
		);
		$stmt->execute($params);
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		if($result[$test_column] != 0){
			return true;
		}else{
			return false;
		}
	}	

}