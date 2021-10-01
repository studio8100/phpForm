<?php 
	
$connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
	
	if($connection){
		echo "DB Connected";
	} else {
		die("Error DB Cannot Connect");
	}
	
$query = "SELECT * FROM users";

//	$query = "INSERT INTO users(username,password) ";
//	$query .= "VALUES ('$username', '$password')";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die('Request Failed' . mysqli_error());
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
		<?php
			while($row = mysqli_fetch_assoc($result)) {
		?>
			<pre>
		<?php
			print_r($row);
		?>
			</pre>
		<?php
			}
		?>
	</div>
</body>
</html>