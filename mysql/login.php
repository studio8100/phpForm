<?php 
if(isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	
$connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
	
	if($connection){
		echo "DB Connected";
	} else {
		die("Error DB Cannot Connect");
	}
	
	$query = "INSERT INTO users(username,password) ";
	$query .= "VALUES ('$username', '$password')";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die('Request Failed' . mysqli_error());
	}
	
//	if($username && $password) {
//	echo $username;
//	echo $password;
//	} else {
//		echo "please enter username and password";
//	}
	
	
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<div>
		<form action="login.php" method="post">
			<div>
				<label for="username">Username</label>
				<input type="text" name="username">
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password">
				
			</div>
			<input type="submit" name="submit" value="Click!">
		</form>
	</div>
</body>
</html>