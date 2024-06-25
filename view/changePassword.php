<?php

include 'header.php';
$id = $_GET['id'];

    $users = $db->query('SELECT * FROM user where id = :id', [':id'=>$id])->find();

?>

<div class="card ">
   <div class="card-header">
          <h3 class="text-center">Change your password <span class="float-right"> <a href="/edit?id=<?= $users['id']; ?>" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">



          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password"  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password"  class="form-control" required>
              </div>


              <div class="form-group">
                <button type="submit" name="changepass" class="btn btn-success">Change password</button>
                <button type="submit" name="cancel" class="btn btn-success">Cancel</button>
              </div>


          </form>
        </div>


      </div>
    </div>


<?php
  include 'footer.php';

  ?>
