<?php 
class DatabaseAPI {
	private $db = null;
	public function DatabaseAPI() {
		$host = Configuration::MYSQL_HOST;
		$db = Configuration::MYSQL_DATABASE;
		$user = Configuration::MYSQL_USER;
		$pass = Configuration::MYSQL_PASSWORD;
		//$this->db = new Database( $host , $user, $pass, $db );
	}

	
}