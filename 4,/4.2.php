
<html>
<head>
</head>
<body>
<form action="4.2.php" method="post">
 Napisz coś <input type="text" name="text" required><br>
<input type=submit value="Zatwierdz"/>
</form>
</body>
</html>
<?php 
$plik = fopen('plik.txt', 'a');
$napis = $_POST['text'];
fwrite($plik, $napis);
fclose($plik);

?>