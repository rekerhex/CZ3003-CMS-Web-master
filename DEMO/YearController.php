<?php 
class YearController {
	public static function getYearList() {
		global $DBAPI;
		return $DBAPI->getYearList();
	}
}