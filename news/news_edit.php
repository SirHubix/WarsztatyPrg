  <?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');

 include('include/header.php');

  ?>

  <?php

 include('db/connection.php');

 $id=$_GET['edit'];
 $query=mysqli_query($conn,"select * from news where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $title=$row['title'];
       $description=$row['description'];
        $date=$row['date'];
         $thumbnail=$row['thumbnail'];
          $category=$row['category'];


  	
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
		        	<li class="breadcrumb-item active"><a href="news.php">News</a></li>
		        	<li class="breadcrumb-item active">Add News</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="news_edit.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
			<h1>Zaktualizuj Wiadomość</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Tytuł:</label>
		    <input type="text" value="<?php echo $title; ?>" placeholder="Tytuł..." name="title" class="form-control" id="email">
		  </div>

		  <div class="form-group">
			  <label for="comment">Opis:</label>
			 	 <textarea class="form-control" placeholder="Opis..." rows="5" name="description" id="comment"><?php echo $description; ?> </textarea>
			</div>

			<div class="form-group">
		    <label for="email"> Data</label>
		    <input type="date"  name="date" value="<?php echo $date ;?>" class="form-control" id="email">
		  </div>

           <div class="form-group">
		    <label for="email"> Nagłówek:</label>
		    <input type="file" value="<?php echo $thumbnail; ?>"  name="thumbnail" class="form-control img-thumbnail" id="email">
		    <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt=""  width="300">
		  </div>
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
		    <div class="form-group">
		    <label for="email"> Kategoria:</label>
		     
               
		        <select class="form-control"  name="category" >
		       <?php
                include('db/connection.php');
                  $query=mysqli_query($conn,"select * from category");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
		        	 
                 <?php } ?>
		        </select>
		  </div>

		  <input type="submit" name="submit" class="btn btn-primary" value="Zaaktualizuj">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Musisz wpisać tytuł');
          	return false;
          }
          if (y=="") {
          	alert('Musisz wpisać opis');
          	return false;
          }
           if (y.length<100) {
          	alert('Opis powinienn zawierać conajmniej 100 znaków');
          	return false;
          }
          
       }
 
		</script>

  </div>
  <?php
 include('include/footer.php')

  ?>
  <?php

include('db/connection.php');


include('db/connection.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
		$date=$_POST['date'];
			$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
				$category=$_POST['category'];

			move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

	$sql= mysqli_query($conn,"update news set title='$title', description='$description' , date='$date' , thumbnail='$thumbnail' , category='$category' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Wiadomość zaaktualizowana pomyślnie !!')</script>  ";
		 echo "<script >window.location='http://localhost/news/news.php' ;</script>";
	} else{
		echo "<script>alert('Spróbuj ponownie !!')</script>  ";
	}
			

}

  ?>
