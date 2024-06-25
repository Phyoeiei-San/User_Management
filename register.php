<?php
//include 'header.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD User Management</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>


 
<div class="container text-center mt-5">
  <div class="row">
  <div class="col d-flex justify-content-center">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>User Registration</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                  <input type="hidden" name="roleid" value="3" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>


            </form>
          </div>


        </div>
      </div>
  </div>
  </div>
</div>

</body>




<!-- Jquery script -->
<script src="assets/jquery.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/jquery.dataTables.min.js"></script>
<script src="assets/dataTables.bootstrap4.min.js"></script>

</html>


  <?php
  //include 'footer.php';

  ?>
