<?php

	// People array
	$people[] = "Mehmood";
	$people[] = "Hassan";
	$people[] = "Hussain";
	$people[] = "Hassaan";
	$people[] = "Nasir";
	$people[] = "Anjum";
	$people[] = "Mudassir";
	$people[] = "Muzammil";
	$people[] = "Ahmed";
	$people[] = "Ali";
	$people[] = "Raza";
	$people[] = "Athar";
	$people[] = "Abdullah";
	$people[] = "Saba";
	$people[] = "Misbah";
	$people[] = "Yasmeen";
	$people[] = "Rida";
	$people[] = "Noureen";
	$people[] = "Asad";
	$people[] = "Minahil";
	$people[] = "Umer";
	$people[] = "Tariq";
	$people[] = "Mubashir";
	$people[] = "Munir";
	$people[] = "Shoaib";
	$people[] = "Arsalan";
	$people[] = "Hamza";
	$people[] = "Usman";
	$people[] = "Mohsin";
	$people[] = "Farhan";
	$people[] = "Musab";
	$people[] = "Saad";
	$people[] = "Rehan";
	$people[] = "Khan";
	$people[] = "Rana";
	$people[] = "Mughal";
	$people[] = "Sharif";



	// get query string
	$q = $_REQUEST['q'];	
	$suggestion = '';

	// get suggestions 
	if ($q !== "") {
		$q = strtolower($q);
		$len = strlen($q);
		foreach ($people as $person) {
			if (stristr($q, substr($person, 0, $len))) {
				if ($suggestions === "") {
					$suggestions = $person;
				}else{
					$suggestions .= ", $person";
				}
			}
		}
	}

	echo $suggestions ==="" ? "No Suggestion": $suggestions;
?>

