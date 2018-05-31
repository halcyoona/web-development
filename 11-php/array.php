<?php

#Array - variable that hold multiple values
/*
	-index
	-Associate
	-Multi-dimensional
*/


// Indexed array
$people = array("Mehmood","Abdullah","athar");
$ids = array(2,3,5,4);
$cars = ["honda","toyota","suzuki"];
$cars[3] = "corolla";
$cars[] = "A3";
//echo(count($cars));
//print_r($cars);
//var_dump($cars);
//echo $cars[4];
//echo $ids[2];
//echo $people[3];




//Associate Arrays
$people = array("Mehmood" => 20, "Abdullah" => 15, "athar"=>18);
$ids = array(22=>"Mehmood",18=>"Abdullah", 15=>"Athar");
$people["Hussain"] = 23;
//echo $ids[18];
//echo $people['Hussain'];
//print_r($people);
//var_dump($people);





// Multi dimensional arrays
$cars = array(
	array("honda",20,10),
	array("A3",10,5),
	array("toyota",4,5)
);

echo $cars[2][0];


?>