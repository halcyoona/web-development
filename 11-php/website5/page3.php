<?php

	$user = ['name'=>"Mehmood", 'email'=>'mehmoodmunir25@gmail.com', 'age'=>35];
	$user = serialize($user);
	setcookie('user', $user , time()+(86400*30));
	$user = unserialize($_COOKIE['user']);
	echo $user['name'];
	print_r($user);
?>