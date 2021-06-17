<?php
 include('db/connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from category where id='$id'");
  if ($query) {
  	 echo "<script> alert('Kategoria została usunięta')</script> ";
  	   echo "<script >window.location='http://localhost/news/categories.php' ;</script>";

  }else{
  	echo "Spróbuj ponownie";
  }


?>