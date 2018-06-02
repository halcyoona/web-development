<?php 

	#substr()
	#Return a portion of a string
	// $output = substr("Hello", 1, 3);
	// $output = substr("Hello", -3,-2);
	// echo $output;

	


	#strlen()
	#Return the length of the string
	// $output = strlen("Hello World");
	// echo $output;


	#strpos()
	#finds the position of the first occurrence of a sub string
	// $output = strpos("Hello World", "o");
	// echo $output ;



	#strrpos()
	#finds the position of the last occurrence of a sub string
	// $output = strrpos("Hello World", "o");
	// echo $output ;



	#trim()
	#Strip whitespaces
	// $text = "Hello World  ";
	// var_dump($text);
	// $trimmed = trim($text);
	// var_dump($trimmed);


	#strtoupper()
	#makes everything uppercase
	// $output = strtoupper("Hello World");
	// echo $output;



	#strtolower()
	#makes everything lowercase
	// $output = strtolower("Hello World");
	// echo $output;

	

	#ucwords()
	#Capitalize every word
	// $output = ucwords("hello world");
	// echo $output;


	#str_replace()
	#Replace all occurences of a search string  with a replacement
	// $text = "Hello World";
	// $output = str_replace("World", "Everyone", $text);
	// echo $output;



	#is_string()
	#check if string
	// $val = 22;
	// $output = is_string($val);
	// echo $output;

	// $values = array(true, false, null, "abc", 33, "33", 44.4, "44.4", "", " ");
	// foreach ($values as $value) {
	// 	if (is_string($value)) {
	// 		echo "{$value} is a string<br>";
	// 	}
	// }




	#gzcompress()
	#compress a string
	// $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	// tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	// quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	// consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	// cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	// proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
	// $compressed = gzcompress($string);
	// echo $compressed;
	// $original = gzuncompress($compressed);
	// echo $original;
?>

