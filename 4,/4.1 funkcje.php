  
<html>
<head>
</head>
<body>
<?php
$liczba1=$_POST['liczba1'];
$liczba2=$_POST['liczba2'];
require_once "4.2.php";

function dodawanie($liczba1, $liczba2){
	
	return $liczba1 + $liczba2;
	
}

function odejmowanie($liczba1, $liczba2){
	
	return $liczba1 - $liczba2;
	}
function mnozenie($liczba1, $liczba2){
	
	return $liczba1 * $liczba2;
	
}
function dzielenie($liczba1, $liczba2){
	
	
	return liczba1/liczba2;
}

?>
</html>