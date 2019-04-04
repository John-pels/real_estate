<?php 
  include "config.php";
   ?>
<!-- Modal -->
<div class="modal fade" id="adminreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter a valid Username" name="name" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter a valid Password" name="password" required="">
        </div>
        
        <button type="submit" class="btn btn-success" name="submit" style="width: 100%;">Register</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php 
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "INSERT INTO admin (username,password) VALUES ('$name', '$password')");
    if ($query) {
      echo "<script> alert('You have successfully added a new admin');
       </script>";
    }
    else{
      echo "<script> alert('Error in adding new admin');
       </script>";
    }
  }
    
 ?>