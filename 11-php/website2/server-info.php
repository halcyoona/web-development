<?php
	

#Server super_globle

// creating Server Array

$server = [
	"Host Server Name" => $_SERVER["SERVER_NAME"],
	"Host Header" => $_SERVER["HTTP_HOST"],
	"Host Software" => $_SERVER["SERVER_SOFTWARE"],
	"Document Root" => $_SERVER["DOCUMENT_ROOT"],
	"Current Page" => $_SERVER["PHP_SELF"],
	"Script Name" => $_SERVER["SCRIPT_NAME"],
	"Absolute Path" => $_SERVER["SCRIPT_FILE"]
];

//echo $server["Document Root"];
//print_r($server);
// create client array
$client = [
	"Client System Info" => $_SERVER["HTTP_USER_AGENT"],
	"Client IP" => $_SERVER["REMOTE_ADDR"],
	"Remote Port" => $_SERVER["REMOTE_PORT"]
];

//	print_r($server);

?>