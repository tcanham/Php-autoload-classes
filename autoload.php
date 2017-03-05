<?php 
require'config_admin.php';

// Class autoload functions
	
	function autoloadModel($className) {
		$filename = DOC_ROOT."models/" . $className . ".php";
		if (is_readable($filename)) {
			require $filename;
		}
	}
	
	function autoloadController($className) {
		$filename = DOC_ROOT."controllers/" . $className . ".php";
		if (is_readable($filename)) {
			require $filename;
		}
	}
	// Call autoload functions
	
	spl_autoload_register("autoloadModel");
	spl_autoload_register("autoloadController");