<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
	if(filter_has_var(INPUT_POST, 'submit')){
	$email=$_POST['email'];
	$em=filter_var($email, FILTER_SANITIZE_EMAIL);
	echo "$em";
	echo "<br>";
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			
			echo "is valid";
		}
		else{
			echo "not valid email";
		}
	}
	?>	

<form method="post" action="form2.php">
EMAIL<input type="text" name="email" required ><br><br>
<!--Password<input type="password" name="password" required ><br><br-->
<input type="submit" name="submit">
</form>

</body>
</html>