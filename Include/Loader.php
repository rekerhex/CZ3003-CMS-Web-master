<?php 
class Loader {
	private static function loadFolderDirect( $path ) {
		$files = scandir($path);
		foreach ($files as $file) {
			if ($file == '.' || $file == '..') continue;
			if (substr($file, -4) === '.php') {
				require_once($path . $file);
			}
		}
	}

	public static function loadConfig() {
		self::loadFolderDirect("Config/");
	}

	public static function loadDatabaseAPI() {
		require_once 'DatabaseAPI/Database.php';
		require_once 'DatabaseAPI/DatabaseAPI.php';
		return new DatabaseAPI();
	}

	public static function loadController() {
		self::loadFolderDirect('CMS/Controller/');
	}

	public static function loadRouting() {
		$path = "Routing/";
		$files = scandir($path);
		
		foreach($files as $file) {
			if ($file == '.' || $file == '..') continue;
			if ( substr($file, -5) !== '.json' ) continue;
			$file_content = file_get_contents($path . $file);
			$object = json_decode($file_content,true);
			Router::register($object);
		}
	}

}