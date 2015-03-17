<?php 
class EventController {
	public static function getEventList() {
		$result = array( 
			array( "createdAt" => "2015-03-15 22:15:04", "id" => "123" , "type" => "Haze" ),
			array( "createdAt" => "2015-03-14 22:15:04", "id" => "12" , "type" => "Fire" )
		 );
		echo json_encode($result);
	}

	public static function createEvent() {
		echo "create with event";
	}

	public static function updateEvent( $id ) {
		echo "Update event with id = " . $id;
	}

	public static function getEvent( $id ) {
		echo "get event with id = " . $id;
	}

	public static function deleteEvent( $id ) {
		echo "delete event with id = " . $id;
	}
}