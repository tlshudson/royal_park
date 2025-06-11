<?php

$dbhost = '';
$dbname = '';
$dbuser = '';
$dbpass = '';

global $db;

/*
try {
	$db = new PDO('mysql:host='.$dbhost.'; dbname='.$dbname, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e;
	exit;
}
*/