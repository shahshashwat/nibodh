<?php
	session_start();
	if(isset($_POST['submit']))
	{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	echo $_SESSION['username'];
	echo $_SESSION['password'];
	header('Location: profile.php'); 
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	Username<input type="text" name="username">
	password<input type="password" name="password">
	<input type="submit" name="submit">
</form>
</body>

</html>