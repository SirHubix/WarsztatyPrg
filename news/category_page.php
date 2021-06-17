<?php
 error_reporting(0);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Wiadomości WPR</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link href="style/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Wiadomości WPR</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
           
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">Strona główna</a>
         
          <a class="p-2 text-muted" href="category_page.php?single=<?php echo$row['category_name'];  ?>"></a>
          
          <a class="p-2 text-muted" href="admin_login.php">Zaloguj</a>
          
        </nav>
      </div>

     <div class="card" style="width:100%; height:350px;" >
      <img class="card-img-top" src="data:image/png;base64,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" alt="Card image" height="350" >
      <div class="card-img-overlay">
    </div>

      <div class="row mb-2">
    <?php
    include('db/connection.php');
     $query1 =mysqli_query($conn,"select * from news order by id desc limit 1,2 ");
      while($row=mysqli_fetch_array($query1)){
         $category=$row['category'];
         $date=$row['date'];
         $title=$row['title'];
         $thumbnail=$row['thumbnail'];

      

    ?>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
             
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $category ; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="single_page.php?single=<?php echo $row['id']; ?> "><?php echo $title; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $date; ?></div>
            
              <a href="single_page.php?single=<?php echo $row['id']; ?> ">Czytaj dalej</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="images/<?php echo $thumbnail;?>" alt="Card image cap" width="150">
          </div>
        </div>
      <?php } ?>
        
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
           Najnowsze wieśći
          </h3>

       <?php
      include('db\connection.php');
   $id=$_GET['single'];

      $query1=mysqli_query($conn,"select * from news where category='$id' ");

       while ($row=mysqli_fetch_array($query1)) {
         # code...
       ?>
        <div class="blog-post">
            <h4 class="blog"> <a href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $row['title']; ?> </a></h4>
            <p class="blog-post-meta"><?php echo $row['date']; ?> <a href="#"><?php echo $row['admin'];?></a></p>

            <p><img class="img img-thumbnail"  src="images/<?php echo $row['thumbnail'];?>"  width="400" height="200" > </p>
            <hr>
            
            <blockquote>
              <?php echo substr($row['description'],0,300 ) ;?>
               <a href="single_page.php?single=<?php echo $row['id'];?> " class="btn btn-primary btn-sm">Czytaj Dalej</a>
            </blockquote>
            
              
            </ol>
           
          </div><
         

   <?php } ?>


        </div>

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">O Stronie</h4>
            <p class="mb-0">Strona jest projektem na WPR</p>
          </div>

           <div class="p-3">
            <h4 class="font-italic">Kategorie</h4>
            <hr>
            <ol class="list-unstyled mb-0">
               <?php
               include('db/connection.php');
                $query1=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query1)){

                

               ?>
              <li><a href="category_page.php?single=<?php echo$row['category_name'];  ?>"><?php echo $row['category_name']; ?></a></li>
              <?php } ?>
            </ol>
          </div>

    </script>
  </body>
</html>
