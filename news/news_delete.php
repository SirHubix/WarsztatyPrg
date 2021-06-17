<?php
 include('db/connection.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from news where id='$id' ");
 if ($query) {
 	 echo "<script> alert('Wiadomość usunięta')</script> ";
  	   echo "<script >window.location='http://localhost/news/news.php' ;</script>";
 
 }else{
 	echo "Spróbuj ponownie";
 }

?>