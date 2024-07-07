<?php
include 'header.php';
?>
    <div class="card ">
        <div class="card-header">
          <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right" name="id">Welcome <?= $_SESSION['user']['username']?> <strong>
            <span class="badge badge-lg badge-secondary text-white"></span>

          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-2">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                  
                    <tr>
                      <th  class="text-center">Id</th>
                      <th  class="text-center">Name</th>
                      <th  class="text-center">Username</th>
                      <th  class="text-center">Phone</th>
                      <th  class="text-center">Email address</th>
                      <th  class="text-center">Address</th>
                     
                      <th  class="text-center">Gender</th>
                      <th  class="text-center">Roles</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach($users as $user): ?>
                      <tr class="text-center">
                     
                        <td><?= htmlspecialchars($user ['id']) ?></td>
                        <td><?= htmlspecialchars($user ['name']) ?></td>
                        <td><?= htmlspecialchars($user ['username']) ?> </td>
                        <td><?= htmlspecialchars($user ['phone']) ?></td>
                        <td><?= htmlspecialchars($user ['email']) ?></td>
                        <td><?= htmlspecialchars($user ['address']) ?></td>
                       
                        <td><?= htmlspecialchars($user ['gender']) ?></td>
                        <td><?= htmlspecialchars($user ['role_name']) ?></td>
                        <td>
                       
                            <a class="btn btn-success btn-sm" href="/">View</a>
                           
                            <a class="btn btn-info btn-sm " href="/edit?id=<?= $user['id']; ?>">Edit</a>
                            
                            
                            <form method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit" onclick="return confirm('Are You Sure to Delete')" class="btn btn-primary btn-sm">Delete</button>
                            </form>
                                  
                                
                             
                         </td>

                      </tr>
                      <?php endforeach; ?>
                   
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                  </tbody>

              </table>









        </div>
      </div>



  <?php
  include 'footer.php';

  ?>
