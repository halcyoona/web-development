<?php 
	
	require 'config/db.php';

	//create query
	$query = "SELECT * FROM posts";

	//get result
	$result = mysqli_connect($conn, $query);

	//fetch data 
	$posts = mysqli_fetch_array($result, MYSQLI_ASSOC);
	var_dump($posts);

	//freeze the result
	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP blog</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1>Posts</h1>
			<?php foreach ($posts as $post): ?>
				<div>
					<h3><?php echo $post['title'];?></h3>
					<small>Created on <?php echo $post['created_at'];?>by<?php echo $post['author'];?></small>
					<p><?php echo $post['body'];?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>