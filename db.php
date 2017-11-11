<?php
try{
	$pdo = new PDO('mysql:host = localhost; dbname=ojt','root');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}
	
catch(PDOException $e){
	$error = 'unable to connect to the database server.';
	include 'error.php';
	exit();
	}
?>