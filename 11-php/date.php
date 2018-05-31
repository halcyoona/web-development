<?php

//echo date("d"); //day
//echo date("m"); //month
//echo date("Y"); //year
//echo date('l'); // day of the week

//echo date("d-m-Y");

//echo date('h'); // hour
//echo date("m");
//echo date("s");
//echo date("a");

#set time zone
//date_default_timezone_set("Pakistan/Islamabad");

//echo date("h:m:s:a");

$timestamp = mktime(2,3,1,3,7,1996);
//echo $timestamp;
//echo date("m/d/Y h:m:s",$timestamp);

$timestamp2 = strtotime("7:00pm March 22 2018");
$timestamp3 = strtotime("Tomorrow");
$timestamp4 = strtotime("Next friday");
$timestamp5 = strtotime("+2 days");
//echo $timestamp;
echo date("m/d/Y h:m:s", $timestamp5);

?>