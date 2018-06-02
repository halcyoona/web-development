<?php

	// Message vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if (filter_has_var(INPUT_POST, 'submit')) {
		// get form data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
		

		// check required fields
		if (!empty($email) && !empty($name) && !empty($message) ) {
			// Passed
			if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
				$msg = "Enter a valid email";
				$msgClass = "alert-danger";	
			}else{
				//passed
				//Email Recipient
				$toEmail = "mehmoodmunir25@gmail.com";
				$subject = "Contact Required Form ".$name;
				$body = "<h2> Request</h2>
						<h4>Name</h4><p>".$name."</p>
						<h4>Email</h4><p>".$email."</p>
						<h4>Message</h4><p>".$message."</p>";
				
				//Email Headers
				$header = "MIME-Version: 1.0"."\r\n";
				$header .= "Content-Type:text/html;charset=UTF-8"."\r\n";
				
				//Addiontal Header
				$header .= "Form: ".$name."<".$email.">"."\r\n";

				if (mail($toEmail, $subject, $body, $header)) {
				 	// Email is sent
				 	$msg = "Your Email has been sent";
					$msgClass = "alert-success";
				 } else {
				 	$msg = "Your email was not sent";
					$msgClass = "alert-danger";
				 }

			}
		}else{
			// Failed
			$msg = "Fill in the all fields";
			$msgClass = "alert-danger";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php if ($msg != ''):?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg?></div>
		<?php endif; ?>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST["name"]) ? $name : "";?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $email : "";?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST["message"])? $message : "";?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>