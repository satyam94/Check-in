<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		$_SESSION['error']="You are not logged in";
		header('Location: index.php');
	}
?>

<html>
	<head>
		<title>
			LoggedIn
		</title>
	</head>
	<body>
		<?php
			echo "Welcome ".$_SESSION['username']."<br>";
			echo "Time : ".date("d-m-y");
		?>
		<a href="logout.php">LOGOUT</a>

	</body>
</html>
