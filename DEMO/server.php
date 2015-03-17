<?php
	require_once 'DatabaseAPI/Database.php';
	require_once 'DatabaseAPI/DatabaseAPI.php';
	require_once 'YearController.php';
	require_once 'DatabaseAPI/Configuration.php';

	$DBAPI = new DatabaseAPI();

	if ( $_REQUEST['data'] == 'year-list' )
		echo json_encode( YearController::getYearList() );