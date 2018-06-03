<?php
	setcookie('username', "Mehmood", time()+(86400*30));

	//delete cookie
	// setcookie('username', "Mehmood", time()- 3600);
	if (count($_COOKIE)>0) {
		echo "there are ". count($_COOKIE).' cookies saved<br>';
	}else{
		echo "There are no cookies saved <br>";
	}
	if (isset($_COOKIE['username'])) {
		echo 'User '.$_COOKIE['username'].' is set<br>';
	}else{
		echo "user is not set";
	}
?>

