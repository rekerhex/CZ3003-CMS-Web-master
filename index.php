<?php 
	define("_SECURITY", true);
	date_default_timezone_set("UTC");
	error_reporting(E_ALL);
	ini_set('display_errors', '1');	

	require_once 'Include/Loader.php';
	require_once 'Include/Router.php';

	Loader::loadConfig();
	Loader::loadRouting();
	Loader::loadController();
	$dbAPI = Loader::loadDatabaseAPI();

	Router::route( $_REQUEST['PATH_INFO'], $_SERVER['REQUEST_METHOD'] );