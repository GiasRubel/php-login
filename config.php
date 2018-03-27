<?php

class DatabaseConnection {
	public function __construct()
	{
		global $pdo;
		try
		{
			$pdo = new PDO ('mysql:hostname=localhost;dbname=login','root','');
		}
		catch(PDOException $e)
		{
			exit('Database Error');
		}
	}
}