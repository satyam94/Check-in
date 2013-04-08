<?php
	// Initialising Variables
	$hostname="localhost";
	$username="root";
	$dbname="simple_login";
	$password="root";

	// Connecting to host
	mysql_connect($hostname,$username,$password) or die("Cannot connect to mysql");

	//Selecting the database
	mysql_select_db($dbname) or die("Cannot connect to database");

	$login=mysql_query("SELECT * FROM login_info WHERE username = '" . $_POST['username'] . "'");

	//Checking if username exists
	if(mysql_num_rows($login)==0)
	{
		header('Location: index.php');
	}

	$row=mysql_fetch_array($login);
	
	//Checking if password entered is correct
	if($row['password']==$_POST['password'])
	{
		// echo "Login Successful.<br>";
		header('Location: loggedin.php');
	}
	else
	{
		// echo " Login Unsuccesful.<br>";
		header('Location: index.php');
	}
	echo "This is the end";
?>