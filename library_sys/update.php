<?php include "header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['book_id']))
    {
      $checkoutid = $_GET['book_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query= "SELECT * FROM book WHERE id = $checkoutid ";
      $view_checkout = mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_checkout))
        {
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
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address1'];
        $postal = $_POST['postalcode'];
        $bookid = $_POST['bookid'];
        $title = $_POST['booktitle'];
        $author = $_POST['bookauthor'];
        $borrow = $_POST['dateborrow'];
        $due = $_POST['datedue'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE book SET firstname = '{$fname}' , lastname = '{$lname}' , mobile= '{$mobile}',
      address1 = '{$address}', postalcode = '{$postal}', bookid = '{$bookid}',
      booktitle = '{$title}', bookauthor = '{$author}', dateborrow = '{$borrow}',
      datedue = '{$due}' WHERE id = $checkoutid";
      $update_book = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Student data updated successfully!')</script>";
    }             
?>


  
<div class="container mt-5 text-light pt-5">
<a href="records.php" class="text-white"><i class="bi bi-arrow-left"></i></a>
    <div class="row mt-3">
    <div class="col">
      
    <h4>Library Member</h4>
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $fname  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" name="lastname"  class="form-control" value="<?php echo $lname  ?>">
      </div>
        
      <div class="form-group">
        <label for="email" >Mobile</label>
        <input type="text" name="mobile"  class="form-control" value="<?php echo $mobile  ?>">
      </div>   
      
      <div class="form-group">
        <label for="lastname" class="form-label">Address</label>
        <input type="text" name="address1"  class="form-control" value="<?php echo $address  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Postal Code</label>
        <input type="text" name="postalcode"  class="form-control" value="<?php echo $postal  ?>">
      </div>
  </div>

  <div class="col">
  <h4>Book Details</h4>
      <div class="form-group">
        <label for="lastname" class="form-label">Book id</label>
        <input type="text" name="bookid"  class="form-control" value="<?php echo $bookid  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Book title</label>
        <input type="text" name="booktitle"  class="form-control" value="<?php echo $title  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Book author</label>
        <input type="text" name="bookauthor"  class="form-control" value="<?php echo $author  ?>">
      </div>
  </div>

  <div class="col">
  <h4>Loan Info</h4>
      <div class="form-group">
        <label for="lastname" class="form-label">Date borrowed</label>
        <input type="text" name="dateborrow"  class="form-control" value="<?php echo $borrow  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Date due</label>
        <input type="text" name="datedue"  class="form-control" value="<?php echo $due  ?>">
      </div>
  </div>

      <div class="form-group">
      <div class="container text-center mt-5">
         <input type="submit"  name="update" class="btn btn-warning mt-2" value="Update">
  </div>
      </div>
    </form>  
  </div>  
  </div>

<?php include "footer.php" ?>