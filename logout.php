<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		unset($_SESSION['username']);
		unset($_SESSION['login']);
	}
	session_destroy();
	header('Location: index.php');
?>