<?php
	session_start();
	
	define('ACCOUNT_TYPE_USER',  1);
	define('ACCOUNT_TYPE_ADMIN', 2);

	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', 'uU39248204');
	define('DB_NAME', 'boatday');
	define('DB_PORT', 3306);

	// define('DB_HOST', '127.0.0.1');
	// define('DB_USER', 'uboatday');
	// define('DB_PASS', '7DW-ByC-GPy-ZRp');
	// define('DB_NAME', 'boatday');
	// define('DB_PORT', 3306);

	include_once('core.library.php');

	if(!isset($not_require_auth) and !isset($_SESSION['account']) and $_SESSION['account']['type'] != ACCOUNT_TYPE_ADMIN) {
		locate('admin.login.php');
	}

	$sql = db_connect();
?>