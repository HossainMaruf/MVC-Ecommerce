<?php
	
	class Database {
		public $connection;	
		public function __construct($config, $username = 'root', $password = '') {
			// http_build_query() build the query string
			$dsn = 'mysql:'.http_build_query($config, '', ';');
			$this->connection = new PDO($dsn, "root", "", [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC	
			]);
		}
		public function query($query) {
			$statement = $this->connection->query($query);		
			$statement->execute();
			return $statement->fetchAll();
		}
	}
