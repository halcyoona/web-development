<?php 
	
	// create connection
	$conn = mysqli_connect("localhost", "root", "121125","phpblog");

	// checking connection
	if (mysqli_connect_errno()) {
		// connection failed
		echo "Failed to connect to My Sql ".mysqli_connect_errno()."<br>";
	}
?>