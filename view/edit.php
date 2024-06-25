<?php

include 'header.php';


?>



 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'> Add User </h3>
        
        </div>
        
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            
            <form class="" action="" method="POST">

            
                <div class="form-group pt-3">
                  <label for="name">Name</label>
                  <input type="text" name="name"  value="<?= $users['name']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username"  value="<?=$users['username']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="number" name="phone" value="<?=$users['phone']; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Email </label>
                  <input type="email" name="email" value="<?=$users['email']; ?>" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label for="address">Addrerss </label>
                  <input type="text" name="address"  value="<?=$users['address']; ?>" class="form-control" required>
                </div>
               
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                  <?php foreach($gender as $g): ?>
                  <?php $selected = $g['gender']  == $users['gender']? 'selected' : ''; ?>
                  <option value="<?= $g['gender'] ?>" <?= $selected ?>><?=$g['gender']; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="sel1">Select user Role</label>
                  
                  <select class="form-control" name="role_id" id="roleid">

                  
                  <?php foreach($roles as $role): ?>
                    <?php $selected = $role['id']  == $users['role_id']? 'selected' : ''; ?>
                  <option value="<?= $role['id'] ?>" <?= $selected ?> ><?= $role['name']; ?></option>
                  
                  <?php endforeach; ?>
                  </select>
                  
                  
                </div>
                

                <div class="form-group">
                
                
                
                  <button type="submit" name="adduser" class="btn btn-success" >Update</button>
                <a href="/changePassword?id=<?= $users['id'];?>"  class="btn btn-success" >
                  Change Password
                </a>
                </div>

                
            </form>

            
          </div>


        </div>
      </div>
  

</body>

</html>


  <?php
  include 'footer.php';

  ?>
