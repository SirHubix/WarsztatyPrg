  <?php
session_start();
if ( $_SESSION['email']==true) {
  
}else
header('location:admin_login.php');
$page='category';
 include('include/header.php');

  ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="addcategory.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Dodaj kategorie</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Kategoire:</label>
		    <input type="text" placeholder="Podaj nazwę kategorii " name="category" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			  <label for="comment">Opis:</label>
			 <textarea class="form-control" placeholder="Opisz kategorię" rows="5" name="description" id="comment"></textarea>
			</div>
		  <input type="submit" name="submit" class="btn btn-primary" value="Dodaj kategorie">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['category'].value;
          if (x=="") {
          	alert('Pola nie mogą być puste');
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

if (isset($_POST['submit'])) {
	
	$category_name=$_POST['category'];
	$des=$_POST['description'];

	 $check = mysqli_query($conn,"select * from category where category_name='$category_name' ");

	  if (mysqli_num_rows($check)>0) {
	  	 echo "<script> alert('Taka kategoria już istnieje')</script>";
	  exit();
   }

	$query=mysqli_query($conn,"insert into  category(category_name,description)values('$category_name','$des')");

	if($query){
		 echo "<script> alert('Kategoria została dodana')</script>";
	}else{
		 echo "<script> alert('Spróbuj ponowni')</script>";
	}
}



  ?>