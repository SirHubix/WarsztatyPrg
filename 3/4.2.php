
<html>
<head>
</head>
<body>
 <form action="" method="POST">
 
 ILOŚĆ OSÓB:
	         <select name="formSubmit">
              <option value="">Select...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
        </select>	
	 IMIĘ: <input type=text name="imie" /><br>
	 NAZWISKO: <input type=text name="nazwisko" /><br>
	 <br>
	  ULICA I NUMER DOMU: <input type=text name="adres" /><br>
	  KOD POCZTOWY:<input type=text name="kod" /><br>
	  MIASTO:<input type=text name="miasto" /><br>
	  <br>
      MAIL: <input type="email" name="mail" /><br>
	 NUMER TELEFONU: <input type="tel" name="numer" /><br>
	  <br>
	  DATA PRZYJAZDU: <input type="date" name="przyjazd" /><br>
	 DATA WYMELDOWANIA: <input type="date" name="wyjazd" /><br>

	 		
     <br>
      <b>DODATKOWE UDOGODNIENIA:</b><br>
        DOSTAWKA:<input type="checkbox" name="dostawka" /><br>
		POPIELNICZKA:<input type="checkbox" name="popielniczka" /><br>
        KLIMATYZACJA:<input type="checkbox" name="klimatyzacja" /><br>
        BALKON:<input type="checkbox" name="balkon"/><br>
  <input type=submit value="Wyślij"/>

  </form>
<?php

 $imie = $_POST['imie'];
 $nazwisko = $_POST['nazwisko'];
 $adres = $_POST['adres'];
 $kod = $_POST['kod']; 
 $miasto = $_POST['miasto']; 
 $mail = $_POST['mail'];
 $numer = $_POST['numer'];
 $przyjazd = $_POST['przyjazd'];
 $wyjazd = $_POST['wyjazd'];
if(isset($_POST['formSubmit'])){
    $formSubmit = $_POST['formSubmit'];
}

function dodatek($nazwa){

	if ((isset($_POST[$nazwa]) && !empty($_POST[$nazwa]))) {
	echo $nazwa;
   echo ": tak";
   echo "<br>";
} 	

}
echo
' <h1> potwierdzenie rezerwacji </h1>'; 
printf("$imie $nazwisko <br> $adres <br> $kod $miasto <br> $mail <br> $numer <br> okres rezerwacji: $przyjazd - $wyjazd <br> ilość osób: $formSubmit<br>"); 

echo dodatek("dostawka") ;

echo dodatek("popielniczka") ;

echo dodatek("klimatyzacja") ;

echo dodatek("balkon") ;



?>

</body>
</html>