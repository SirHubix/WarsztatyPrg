<html>
<head>
</head>

<body>

<form action="" method="post">
    podaj liczbe do sprawdzenia: <input type="number" name="liczba" /><br />
    <input type="submit" value="Wyslij" />
</form>

<?php

$liczba = $_POST['liczba'];

function liczbapierwsza($liczba) {
	$i = 2;
    $licznik = 0;
	while($i < $liczba) {
		$licznik++;
        if($liczba % $i == 0) {
            echo 'Nie jest ';
			echo '<br>';
            echo 'Ilość iteracji '.$licznik;
			return false;
		}
		$licznik++;
	}
    echo 'Jest ';
	echo '<br>';
    echo 'Ilość pentli '.$licznik;
	return true;
}

liczbapierwsza($liczba);

?>
</body>

</html>