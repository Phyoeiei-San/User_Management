<?php



$config = require('config.php');
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
// Get the form inputs
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

    $id = $_GET['id'];

    $users = $db->query('SELECT * FROM user where id = :id', [':id'=>$id])->find();

    if (isset($_POST['cancel'])) {
        // Redirect to the profile page
        header('Location: /edit?id='.$users['id']);
        exit;
    }

    
    
    // Validate inputs
    if (empty($old_password) || empty($new_password)) {
        //echo "Both fields are required.";
        exit();
    }

   

     
    if ( password_verify($old_password, $users['password'])) {
        // Old password is correct, proceed to update
        $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

        $change= $db->query('UPDATE user SET password = :password WHERE id = :id',[
            'password' =>  $new_password_hashed,
            'id'=>$id
         ]);
         

        
        echo "Password changed successfully.";
    } else {
        echo "Old password is incorrect.";
    }
}


    include ('view/changePassword.php');
    


?>