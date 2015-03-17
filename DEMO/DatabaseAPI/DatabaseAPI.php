<?php 
class DatabaseAPI {
	private $db;
	public function DatabaseAPI() {
		$host = Configuration::MYSQL_HOST;
		$user = Configuration::MYSQL_USER;
		$pass = Configuration::MYSQL_PASSWORD; 
		$db = Configuration::MYSQL_DATABASE;

		$this->db = new Database($host, $user, $pass, $db);
	}

	public function getYearList() {
		$this->db->query("SELECT DISTINCT year FROM User ORDER BY year ASC");
		return $this->db->fetchAll();
	}
}