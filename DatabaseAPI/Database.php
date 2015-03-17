<?php 
class Database {
	private $pdo = null;
	private $sth = null;
	private $fetch_mode = PDO::FETCH_ASSOC;
	function Database($host, $user, $pass, $db) {
		$this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass );
	}

	/**
	* Using ? to parse value
	*/
	function query( $sql ) {
		$args = func_get_args();
		array_shift($args);
		$this->sth = $this->pdo->prepare($sql);
		$this->sth->setFetchMode($this->fetch_mode); 
		$this->sth->execute($args);
	}

	function fetchAll() {
		return $this->sth->fetchAll();
	}

	function fetchOne() {
		return $this->sth->fetch();
	}

	function getNumRows() {
		return count($this->fetchAll());
	}

}