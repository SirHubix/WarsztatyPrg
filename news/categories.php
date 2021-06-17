  <?php
session_start();
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='categories';
 include('include/header.php');

  ?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
        <div class="text-right">
        <a   class="btn btn-primary" href="addcategory.php">Dodaj kategorię</a> 
          
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Nazwa Kategorii</th>
         <th>Opis</th>
         <th>Edytuj</th>
         <th>Usuń</th>
       </tr>
        <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
           <td><?php echo $row['category_name'];?></td>
            <td><?php echo substr($row['description'],0,200 );?></td>
            <td> <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >edytuj</a></td>
            <td> <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >usuń</a></td>
        </tr>
       <?php } ?>  
    </table>

  </div>

  <?php
 include('include/footer.php')

  ?>