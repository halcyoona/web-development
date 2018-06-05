<?php

	$path = "/dir1/myfile.php";
	$file = "file1.txt";

	// return a filename
	// echo basename($path);

	// return a filename without extention
	// echo basename($path, ".php");

	// return a directory name from path
	// echo dirname($path);

	// check if file exist and folder also
	// echo file_exists($file);

	// get absolute path
	// echo realpath($file);

	// check to see if  only file
	// echo is_file($file);

	// check if file writeable
	// echo is_writable($file);

	// check if file readable
	// echo is_readable($file);

	// get file size
	// echo filesize($file);

	//creata a directory 
	// mkdir('testing');

	//delete a directory if empty
	// rmdir('testing');

	// copy file
	// echo copy('file1.txt', 'file2.txt');

	// rename a file 
	//  rename('file2.txt', 'myfile.txt');

	// delete a file
	// unlink('myfile.txt');

	// write from file to string
	// echo file_get_contents($file);

	// write string to file
	// echo file_put_contents($file, 'Good bye World');

	// $current = file_get_contents($file);
	// $current .= ' Goodbye World';
	// file_put_contents($file, $current);

	// open a file for reading
	// $handle = fopen($file, 'r');
	// $data = fread($handle, filesize($file));
	// echo $data;

	// open file for writing
	// $handle = fopen('file2.txt', 'w');
	// $txt = "Mehmood\n";
	// fwrite($handle, $txt);
	// $txt = "Abdullah\n";
	// fwrite($handle, $txt);
	// fclose($handle);
?>