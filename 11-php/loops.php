<?php

#Loops - Execute code set number of times

/*
	For 
	while
	Do.. while
	Foreach
*/


#For loop
/*
for($i = 0; $i < 5; $i++)
{
	echo "Number  = ".$i; 
	echo"<br>";
}
*/

#While loops
/*
$i = 0;
while($i < 5)
{
	echo "Numbers = ".$i;
	echo"<br>";
	$i++;
}
*/

#Do..while
/*
$i = 0;
do{
	echo "Numbers = ".$i;
	echo "<br>";
	$i++;
}
while($i < 8);
*/


#foreach
$people = array("Mehmood","Abdullah","Athar");
foreach($people as $person){
	echo $person;
	echo "<br>";
}

$people = array("Mehmood"=>23, "Abdullah"=> 18, "Athar"=>15);
foreach($people as $person=>$age){
	echo $person.":".$age;
	echo "<br>";
}




?>