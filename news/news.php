  <?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='news';
 include('include/header.php');

  ?>
 <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
         
          <li class="breadcrumb-item active">News</li>
        </ul>       
       </div>

  <div style=" width: 70%; margin-left: 20%; margin-top: 5%">
        <div class="text-right">
        <a   class="btn btn-primary" href="AddNews.php">Dodaj wiadomość</a> 
          
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Tytuł</th>
         <th>Opis</th>
         <th>Data</th>
         <th>Kategoria</th>
         <th>Nagłówek</th>
         <th>Admin</th>
         
         <th>Edytuj</th>
         <th>Usun</th>
       </tr>
        <?php
        include('db/connection.php');
           $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*3)-3;

           }
           
      $query=mysqli_query($conn,"select * from news limit $page1,3");
       while ($row=mysqli_fetch_array($query)) {
         ?>
         <tr>
           <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
             <td><?php echo substr($row['description'],0,100 ); ?></td>
               <td><?php echo date("F jS ,y", strtotime($row['date'])); ?></td>
                 <td><?php echo $row['category']; ?></td>
                   <td><img class="img img-thumbnail" src="images/<?php echo $row['thumbnail'];?>" alt="" width="150" height="150" ></td>
                   <td><?php echo $row['admin'];?></td>
                   <td><a class="btn btn-info btn-sm" href="news_edit.php?edit=<?php echo $row['id'];?>">edytuj</a></td>
                     <td><a class="btn btn-danger btn-sm" href="news_delete.php?del=<?php echo $row['id'];?>">usun</a></td>
                    
         </tr>
         
       
     
       
 <?php }  ?>
         </table>
             <ul class="pagination">
               <li class="page-item disabled">
                 <a href="#" class="page-link" >Poprzednia</a>
               </li>
              <?php

       $sql=mysqli_query($conn,"select * from news");
       $count=mysqli_num_rows($sql);
       $a=$count/2;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="news.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
                <li class="page-item disabled">
                 <a href="#" class="page-link" >Następna</a>
               </li>
       </ul>

       

  </div>


  

  <?php
 include('include/footer.php')

  ?>