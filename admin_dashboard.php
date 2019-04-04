<?php 

include "includes/config.php";
include "includes/session.php";
 ?>



<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ajeigbe John Oluwaseyi">
  <meta name="description" content="This is a real estate and property website that delivers a great and conducive mansions to all our visitors">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--   <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Montserrat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto" rel="stylesheet">
    <!-- Favicon below -->
    <link rel="shortcut icon"  href="images/gold-fish-vector-icon-isolated-260nw-1187750953.jpg">

	<link rel="shortcut icon"  href="img/home_logo.png">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon"  href="img/logo_graphic_250h.png">
	<title>Pels-Home Admin Dashboard</title>
</head>
<body>
<?php include "includes/admin_nav.php"; ?>


 <div class="container-fluid">
          <div class="row">
            

            <div class="col-lg-12 col-md-12">
              <table class="table striped table-bordered table-hover display">
                <thead>
                  <tr>
                  	  <td>Action</td>
                    <td>Id</td>
                     <td>Full-name</td>
                      <td>State</td>
                       <td>Gender</td>
                        <td>Address</td>
                         <td>Email Address</td>
                          <td>Password</td>
                           <td>Confirm Password</td>
                            <td>Phone Number</td>
                             <td>Description</td>
                              <td>Date/Time</td>
                            
                  </tr>
                </thead>
                		<tfoot>
                			<tr>
                				  <td>Action</td>
                    <td>Id</td>
                     <td>Full-name</td>
                      <td>State</td>
                       <td>Gender</td>
                        <td>Address</td>
                         <td>Email Address</td>
                          <td>Password</td>
                           <td>Confirm Password</td>
                            <td>Phone Number</td>
                             <td>Description</td>
                              <td>Date/Time</td>
                			</tr>
                		</tfoot>
                		<?php 
                		$query = mysqli_query($con,"SELECT * FROM register");
                		$rows = mysqli_num_rows($query);
                		while ($fetch = mysqli_fetch_array($query)) {

                		?>


                		<tbody>
                		<tr>

                		  <td><a onclick="return confirm('Are you sure you wanna delete this record?')" href="includes/delete.php?id=<?php echo $fetch['id']; ?>" ><i class="fa fa-trash btn btn-danger"> Delete</i></a></td>
              <td><?php echo $fetch['id']; ?></td>
            <td><?php echo $fetch['fullname']; ?></td>
            <td><?php echo $fetch['state']; ?></td>
            <td><?php echo $fetch['gender']; ?></td>
            <td><?php echo $fetch['address']; ?></td>
            <td><?php echo $fetch['email']; ?></td>
            <td><?php echo $fetch['password']; ?></td>
            <td><?php echo $fetch['c_password']; ?></td>
              <td><?php echo $fetch['phone']; ?></td>
                <td><?php echo $fetch['description']; ?></td>
                  <td><?php echo $fetch['date']; ?></td>
            <?php
          }
           ?>
        
        </tr>
        
      </tbody>
              </table>

            </div>
          </div>



    </div>





      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/typed.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	

</script>
</body>
</html>



<?php 
  include "includes/config.php";
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
      window.location = './admin_dashboard.php';
       </script>";
    }
    else{
      echo "<script> alert('Error in adding new admin');
        window.location = './admin_dashboard.php';
       </script>";
    }
  }
    
 ?>


