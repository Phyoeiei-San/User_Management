<?php


include 'header.php';





 ?>



 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'> Add User </h3>
        </div>
        <div class="card-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name"> Name</label>
                  <input type="text" name="name"  class="form-control" >
                  <?php if (isset($errors['name'])): ?>
                    <h5 class="text-danger"><?= $errors['name']; ?></h5>
                  <?php endif; ?>
                </div>
               
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username"  class="form-control" >
                  <?php if (isset($errors['username'])): ?>
                    <h5 class="text-danger"><?= $errors['username']; ?></h5>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="email">Email </label>
                  <input type="email" name="email"  class="form-control" >
                  <?php if (isset($errors['email'])): ?>
                    <h5 class="text-danger"><?= $errors['email']; ?></h5>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password"   class="form-control" >
                  <?php if (isset($errors['password'])): ?>
                    <h5 class="text-danger"><?= $errors['password']; ?></h5>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="address">Addrerss </label>
                  <input type="text" name="address"  class="form-control" >
                  <?php if (isset($errors['address'])): ?>
                    <h5 class="text-danger"><?= $errors['address']; ?></h5>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="number" name="phone"  class="form-control" >
                  <?php if (isset($errors['phone'])): ?>
                    <h5 class="text-danger"><?= $errors['phone']; ?></h5>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender" >
                  
                  <option value="1" selected='selected'>Male</option>
                  <option value="2">Female</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="sel1">Select user Role</label>
                  
                  <select class="form-control" name="role_id" id="roleid">
                  <?php foreach($role as $r): ?>
                  <option value = "<?=  $r['id']; ?>"><?= $r['name']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  
                  
                </div>
                <div class="form-group">
                  <button type="submit" name="adduser" class="btn btn-success">Save</button>
                  <button type="submit" name="cancel" class="btn btn-success">Cancel</button>
                </div>


            </form>
          </div>


        </div>
      </div>
  

</body>

</html>


  <?php
  //include 'footer.php';

  ?>
