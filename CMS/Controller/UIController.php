<?php 
class UIController {
	public static function getCallOperatorUI() {
		header('Content-Type: text/html; charset=utf-8');
		include "CMS/UI/CallOperatorUI/call-operator.php";
	}
}