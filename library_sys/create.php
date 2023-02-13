<?php  include "header.php" ?>

<?php 
  if(isset($_POST['create'])) 
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
       
        // SQL query to insert user data into the users table
        $query= "INSERT INTO book(firstname, lastname, mobile, address1, postalcode,
        bookid, booktitle, bookauthor, dateborrow, datedue) 
        VALUES('{$fname}','{$lname}','{$mobile}','{$address}','{$postal}','{$bookid}'
        ,'{$title}','{$author}','{$borrow}','{$due}')";
        $add_checkout = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_checkout) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Checkout added successfully!')</script>";
              }         
    }
?>

<div class="container mt-5 text-light pt-5">
<a href="records.php" class="text-white"><i class="bi bi-arrow-left"></i></a>
  <div class="row mt-3">
  <div class="col">
    
    <h4>Library Member</h4>
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="email" class="form-label">Mobile</label>
        <input type="text" name="mobile"  class="form-control">
      </div>  
      
      <div class="form-group">
        <label for="lastname" class="form-label">Address</label>
        <input type="text" name="address1"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Postal Code</label>
        <input type="text" name="postalcode"  class="form-control">
      </div>
  </div>

  <div class="col">
    <h4>Book Details</h4>
      <div class="form-group">
        <label for="lastname" class="form-label">Book id</label>
        <input type="text" name="bookid"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Book title</label>
        <input type="text" name="booktitle"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Book author</label>
        <input type="text" name="bookauthor"  class="form-control">
      </div>
  </div>

  <div class="col">
    <h4>Loan Info</h4>
      <div class="form-group">
        <label for="lastname" class="form-label">Date borrowed</label>
        <input type="text" name="dateborrow"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Date due</label>
        <input type="text" name="datedue"  class="form-control">
      </div>
  </div>

      <div class="form-group">
      <div class="container text-center mt-5">
        <input type="submit"  name="create" class="btn btn-warning mt-2" value="Submit">
  </div>
      </div>
    </form> 
  </div>
  </div>
  </div>

<?php include "footer.php" ?>