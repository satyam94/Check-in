<?php
	// Connecting to host
	session_start();
	if($_SESSION['login']=="true")
	{
		header('Location: loggedin.php');
	}

	$_SESSION['username']=$_POST['username'];

	require("common.php");

	$login=mysql_query("SELECT * FROM login_info WHERE username = '" . $_POST['username'] . "'");
	$row=mysql_fetch_array($login);
	
	//Checking if username exists
	if(mysql_num_rows($login)==0)
	{
		$_SESSION['error']="Username Does Not Exist ";
		header('Location: index.php');
	}

	//Checking if password entered is correct
	if($row['password']==$_POST['password'] && $_POST['password']!="")
	{
		//To check that user is logged in or not
		$_SESSION['login']="true";

		header('Location: loggedin.php');
	}
	else
	{
		if(!isset($_SESSION['error']))
		{
			$_SESSION['error']="Password Incorrect";
		}
		header('Location: index.php');
	}
?>