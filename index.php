<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		header('Location: loggedin.php');
	}
	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
?>

<html>
	<head>
		<title>
			Simple Login Page
		</title>
	</head>
	<body>
		<h1>Login Page</h1>
		<form action="login.php" method="post">
			<?php
				echo "<label>Username : </label>";

				if($_SESSION['username'])
				{
					echo '<input type="text" name="username" placeholder="Enter Your Username" '; 
					echo "value = '".$_SESSION['username']."'";
					echo ">";
					unset($_SESSION['username']);
				}
				else
				{	
					echo '<input type="text" name="username" placeholder="Enter Your Username"> '; 
				}
			?>
			<br>
			<label>Password : </label>
			<input type="password" name="password" placeholder="Enter Your Password">
			<br>
			<input type="submit" value="Submit">

			<br><br>

		</form>
	</body>
</html>