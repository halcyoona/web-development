<?php
	// if(isset($_GET["name"])){
	// 	// print_r($_GET);
	// 	// echo $_GET["name"]
	// 	$name = htmlentities($_GET["name"]);
	// 	// echo $name;
	// }

	// if(isset($_POST["name"])){
	// 	print_r($_POST);
	// 	echo $_POST["name"]
	// 	$name =  htmlentities($_POST["name"]);
	//  	echo $name;
	// }

	// if(isset($_REQUEST["name"])){
	// 	print_r($_REQUEST);
	// 	echo $_REQUEST["name"]
	// 	$name =  htmlentities($_REQUEST["name"]);
	//  	echo $name;
	// }
	// echo $_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Website</title>
	</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Mehmood">Mehmood</a>
		</li>
		<li>
			<a href="get_post.php?name=Ali">Ali</a>
		</li>
	</ul>
	<h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>