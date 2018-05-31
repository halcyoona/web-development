<?php
	echo $_GET["name"];
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
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>