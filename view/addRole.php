<?php


include 'header.php';

 ?>



 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Create Role</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Role</label>
                  <input type="text" name="name"  id="name" class="form-control">
                  <?php 
                  showError();
                  showMsg();
                  ?>
                </div>
                <div class="form-group">
                <h3>Permission</h3>
                
                <table id="example" class="table" >
                  <thead>
                  
                  <?php foreach($features as $feature): ?> 
                            <tr>
                           <td><?= $feature['name'] ?></td>
                  <?php 
                   $featurePermissions = array_filter($permissions, function($permission) use ($feature) {
                    return $permission['feature_id'] == $feature['id'];
                });
                ?> 
                  
              <?php foreach( $featurePermissions  as $permission):?>
                <td>
                <label class='checkbox-label'><input type='checkbox' name='permissions[]' value='<?= $permission['id'] ?>' style='margin-right:10px'><?= $permission['name']?></label></td>
                       
                <?php endforeach; ?>
                            </tr>
                  <?php endforeach; ?>         

                    <!-- <tr>
                    <td  class="text-center"><label for="user"> Role</label></td>
                    <td  class="text-center"><label for="create">Create</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="r1" value="user"></td>
                    <td  class="text-center"><label for="view">View</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="r2" value="user"></td>
                    <td  class="text-center"><label for="update">Update</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="r3" value="user"></td>
                    <td  class="text-center"><label for="delete">Delete</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="r4" value="user"></td>
                    </tr> -->

                    <!-- <tr>
                    <td  class="text-center"><label for="user"> Product</label></td>
                    <td  class="text-center"><label for="create">Create</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="p1" value="user"></td>
                    <td  class="text-center"><label for="view">View</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="p2" value="user"></td>
                    <td  class="text-center"><label for="update">Update</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="p3" value="user"></td>
                    <td  class="text-center"><label for="delete">Delete</label>&nbsp;&nbsp;<input type="checkbox" id="user" name="p4" value="user"></td>
                    </tr> -->
                  </tbody>
                </table>
                </div>
                  

                <div class="form-group">
                  <button type="submit" name="save" class="btn btn-success">Save</button>
                  <button type="submit" name="cancel" class="btn btn-success">Cancel</button>
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
