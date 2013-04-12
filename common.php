<?php
	// Initialising Variables
	$hostname="localhost";
	$username="root";
	$dbname="simple_login";
	$password="root";

	//Connection to mysql server
	mysql_connect($hostname,$username,$password) or die("Cannot connect to mysql");

	//Selecting the database
	mysql_select_db($dbname) or die("Cannot connect to database");
?>