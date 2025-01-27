<?php
// PDO conexion data base
function connect() {
	$hostname = 'localhost';
	$bd = 'boda';
	$user = 'root';
	$password = '';
    return new PDO('mysql:host='.$hostname.';dbname='.$bd, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
?>