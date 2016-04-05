<?php
//ob_start();
session_start();

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','cafe');

//image directory
$dir = "uploads/daily_images/";


//define('DBHOST','localhost');
//define('DBUSER','u865672332_admin');
//define('DBPASS','yc6NQWycSD');
//define('DBNAME','u865672332_db1');

try {

	//create PDO connection 
	//$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db = new PDO("mysql:host=".DBHOST.";port=3307;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo $e->getMessage();
	exit;
}
?>