<?php 
class Router {
	private static $controllers = array();
	private static $component = null;
	private static $method = null;
	private static $temp = null;

	private static function match($routing) {
		if ( $routing['method'] != self::$method ) return false;
		if ( $routing['path_length'] != count(self::$component) ) return false;
		self::$temp = self::$component;
		foreach ($routing['router'] as $value) {
			if ( self::$temp[0] != $value ) return false;
			array_shift(self::$temp);
		}
		return true;
	}

	private static function prepareParams() {
		return self::$temp;
	}

	public static function route( $path, $method ) {
		self::$component = explode("/", $path);
		self::$method = $method;
		foreach (self::$controllers as $controller) {
			foreach ($controller['routings'] as $routing) {
				if ( self::match($routing) ){
					$params = self::prepareParams( $routing );
					call_user_func_array($controller['Controller']."::".$routing["handler"], $params);
					return;
				}
			}
		}
		http_response_code(404);
	}

	public static function register( $controller ) {
		array_push(self::$controllers, $controller);
	}

}