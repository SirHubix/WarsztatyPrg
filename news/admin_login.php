<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>
  <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- costom css -->
   <!-- costom css -->
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
   <div class="container">

  <form action="admin_login.php" method="post">
    <h3>Admin Login</h3>
  <div class="form-group">
    <label for="email">Nick:</label>
    <input type="Username"  name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Hasło:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary" value="login">
</form>
    
   </div>

</body>
</html>

<?php
 include('db/connection.php');

  if (isset($_POST['submit'])) {
    $email=$_POST['email'];
   $password=$_POST['password'];

    $query=mysqli_query($conn,"select * from admin_login where name='$email' AND password='$password' ");

   if ($query) {
      if (mysqli_num_rows($query)>0) {
          $_SESSION['email']=$email;
        
          header("location:home.php");
      }else{
        echo "<script>  alert('Podano złe dane, spróbuj ponownie')</script>";
      }
   }

    
  }


?>

  