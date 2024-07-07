<?php

$config = require('config.php');
$db = new Database($config['database']);

if(!isset($_SESSION['user'])){
    header("Location: /login");
}

$features = $db->query("SELECT * FROM features")->get();

 $permissions = $db->query("SELECT * FROM permissions ")->get();
 
    
   


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['cancel'])) {
        // Redirect to the profile page
        header('Location: /addRole');
        exit;
    }
    
    
    $name = trim( $_POST['name']);
    if(empty($name)){
        setError('Please Enter Name');
    }

    if(!hasError()){

    $reg = $db->query('INSERT INTO roles(name) VALUES(:name)', [
        'name' => $_POST['name'],
    ]);
    if($reg){
        $roleId = $db->lastInsertId();

        if($roleId && isset($_POST['permissions']) && is_array($_POST['permissions'])){
            foreach($_POST['permissions'] as $permissionId){
                $db->query('INSERT INTO role_permissions (role_id, permission_id) VALUES (:role_id, :permission_id)',
                 ['role_id' => $roleId,
                  'permission_id' => $permissionId]);
            }
        }
    }

    }
 
}

    
   
   
    include ('view/addRole.php');

    
   


?>