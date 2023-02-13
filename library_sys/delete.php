 <?php  include "header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $checkoutid= $_GET['delete'];

         // SQL query to delete data from user table where id = $studentid
         $query = "DELETE FROM book WHERE id = {$checkoutid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
     

              ?>

  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
 
<?php include "footer.php" ?>