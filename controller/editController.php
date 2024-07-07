<?php



$config = require('config.php');
$db = new Database($config['database']);

if(!isset($_SESSION['user'])){
    header("Location: /login");
}

// $users = $db->query('SELECT user.id, user.name, user.username, user.phone, user.email, user.address, 
// user.password, user.gender, roles.name as role_name, roles.id as rid
//  FROM user INNER JOIN roles ON user.role_id = roles.id where user.id = :id', [':id'=>$id])->find();

$roles= $db->query('SELECT * FROM roles')->get();
$gender = $db->query('SELECT DISTINCT gender FROM user')->get();

if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
   



$users = $db->query('SELECT * FROM user where id = :id', [':id'=>$id])->find();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['change'])) {
       
        header('Location: /changePassword');
       
        
    }

    $upd = $db->query('UPDATE user SET name = :name, username= :username, role_id= :role_id, phone= :phone, 
     email= :email, address= :address, gender= :gender WHERE id = :id',[
         'name' => $_POST['name'],
         'username' => $_POST['username'],
         'role_id' => $_POST['role_id'],
         'phone' => $_POST['phone'],
         'email' => $_POST['email'],
         'address' => $_POST['address'],
         'gender' => $_POST['gender'],
         ':id'=>$id
               
         
     ]);
 
    if($upd){
       
        header('Location: /edit?id='. $users['id'] );
        setMsg('User Update Susccess');
    }
    
   
 }

 
 
}

   
    include ('view/edit.php');
   
    


?>