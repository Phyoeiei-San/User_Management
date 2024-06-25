<?php

$config = require('config.php');
$db = new Database($config['database']);


   

if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
isset($_POST['_method']) && $_POST['_method'] === 'DELETE' ) {

    
        $db->query('DELETE FROM user WHERE id = :id', [
            'id' => $_POST['id'],
        ]);
    

}

$users = $db->query('SELECT user.id, user.name, user.username, user.phone, user.email, user.address, 
user.password, user.gender, roles.name as role_name
 FROM user INNER JOIN roles ON user.role_id = roles.id')->get();
    
    
    include ('view/index.view.php');
    
    
   

?>