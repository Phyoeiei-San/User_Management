<?php
include 'header.php';

?>



 
<div class="container text-center mt-5">
  <div class="row">
  <div class="col d-flex justify-content-center">
    <div class="card ">
      
       <div class="card-header">
        <div class="card-body">
          <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
        </div>
       


            <div style="width:450px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control" required>
                  <?php 
                  showError();
                  
                  ?>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password"  class="form-control" required>
                  <?php 
                  
                  showMsg();
                  ?>
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>


            </form>
          </div>


        </div>
      </div>
  </div>
    </div>
</div>

     

  <?php
 include 'footer.php';

  ?>
