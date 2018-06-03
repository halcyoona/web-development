<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	<script type="text/javascript">
		function showSuggestion(str){
			if (str.length == 0) {
				document.getElementById('output').innerHTML = '';
			} else{
				// AJAX request
				var xmlhttp = new XMLHttpRequest(); 
				xmlhttp.onreadystatechange = function (){
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h1>Search User</h1>
		<form>
			Search User:<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
		</form>
		<p>suggestions:<span id="output" style="font-weight: bold;"></span></p>
	</div>
</body>
</html>