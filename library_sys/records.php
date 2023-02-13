<?php include "header.php"?>

<section class="mt-5">
<div class="row">
<div class="col-1 bg-light p-1 pt-2"> 
<nav class="nav flex-column">
  <a class="nav-link active text-dark" aria-current="page" href="home.php">Dashboard</a>
  <a class="nav-link text-dark" href="create.php">Create</a>
  <a class="nav-link text-dark" href="signup.php">Add User</a>
  <a class="nav-link text-dark" href="index.php">Logout</a>
</nav>
</div>
  
<div class="col-11">
    <h2 class="text-start text-white p-3">Manage Checkouts</h2>
    <div class="container-fluid">
      <a href="create.php" class='btn btn-outline text-dark float-end bg-warning mb-2'> <i class="bi bi-person-plus"></i> Create New Checkout</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">First Name</th>
              <th  scope="col">Last Name</th>
              <th  scope="col">Mobile</th>
              <th  scope="col">Address</th>
              <th  scope="col">Postal Code</th>
              <th  scope="col">Book id</th>
              <th  scope="col">Book title</th>
              <th  scope="col">Book author</th>
              <th  scope="col">Date Borrowed</th>
              <th  scope="col">Date Due</th>
              <th  scope="col" colspan="2" class="text-center">Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
</div>
 
          <?php
          
            $query="SELECT * FROM book";               // SQL query to fetch all table data
            $view_students= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_students)){
              $id = $row['id'];                
              $fname = $row['firstname'];        
              $lname = $row['lastname'];         
              $mobile = $row['mobile']; 
              $address = $row['address1'];
              $postal = $row['postalcode'];
              $bookid = $row['bookid'];
              $title = $row['booktitle'];  
              $author = $row['bookauthor'];
              $borrow = $row['dateborrow'];  
              $due = $row['datedue'];   

              echo "<tr >";

              echo " <th scope='row' class='table-light'>{$id}</th>";
              echo " <td class='table-light'> {$fname}</td>";
              echo " <td class='table-light'> {$lname}</td>";
              echo " <td class='table-light'>{$mobile} </td>";
              echo " <td class='table-light'> {$address}</td>";
              echo " <td class='table-light'> {$postal}</td>";
              echo " <td class='table-light'> {$bookid}</td>";
              echo " <td class='table-light'> {$title}</td>";
              echo " <td class='table-light'> {$author}</td>";
              echo " <td class='table-light'> {$borrow}</td>";
              echo " <td class='table-light'> {$due}</td>";

              echo " <td class='text-center table-light' > <a href='update.php?book_id={$id}' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center table-light'>  <a href='delete.php?delete={$id}' class='btn btn-danger btn-sm'> <i class='bi bi-trash'></i> DELETE</a> </td>";

              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
</section>

<?php include "footer.php" ?>