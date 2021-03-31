<?php

function tablica ($rozmiar){
	$tab = array()
	for ($i = 0; $i < $rozmiar; $i++)
	{
		for ($j = 0; $j < rozmiar; $j++)
	{
	echo ($tablica[$i][$j] = ($i + 1) * ($j + 1)." ");
	}
	
}
}
 tablica(8);
?>
