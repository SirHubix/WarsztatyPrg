
<html>
<head>
<body>
<form method="POST" action="">
<input type="text" name="liczba1" size="10">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="liczba2" size="10">
<input type="submit" value="Oblicz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
require_once 'funkcje.php';
$znak = $_POST['znak'];
switch ($znak)
{
 case "+":
   echo dodawanie(liczba1,liczba2);
   break;
 case "-":
   echo odejmowanie(liczba1, liczba2);
   break;
 case "*":
   echo mnozenie(liczba1, liczba2);
   break;
 case "/":
   echo dzielenie(liczba1, liczba2);
   break;
}
?>
</body>
</head>
</html>
