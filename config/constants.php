<?php
session_start();

define('SITEURL','http://localhost/restorant_test/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSOWRD','');
define('DB_NAME','restorant_test');




$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSOWRD) or die(mysqli_error($conn));
$db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));

?>


