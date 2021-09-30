<?php

if(isset($_POST['submit'])) {
	
	$name = array("Paul", "Krissy", "Evee");
	
	$minimum = 3;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username) < $minimum) {
		echo "Username needs to be more than 3 letters";
	}
	
	if(!in_array($username, $name)) {
		echo "No Access Allowed";
	} else {
		echo "Welcome!";
	}
	
//	echo $username;
//	echo $password;
	
	
}

?>
