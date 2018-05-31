<?php

#Function - block of code that can be repeatedly called

/*
	Camel Case - myfunction()
	Lower case - my_function()
	Pascal Case - MyFunction()
*/

#create simple fucntion
/*
function simpleFunction()
{
	echo "Hello World!";
}
#call simple function
simpleFunction();
*/

//function with parameters
/*
function sayHello($name = "world")
{
	echo "Hello ".$name;
	echo "<br>";
}
sayHello("Mehmood");
sayHello("Abdullah");
sayHello();
*/

/*
function add($num1, $num2)
{
	return  $num1 + $num2;
}
echo add(2,3);
*/
$num = 10;
function addfive($num)
{
	$num += 5;
}

function addten(&$num)
{
	$num += 10;
}
addfive($num);
echo "value : $num <br>";
addten($num);
echo "value : $num <br>";



$num = 10;

?>