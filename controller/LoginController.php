<?php

$config = require('config.php');
$db = new Database($config['database']);


if(isset($_SESSION['user'])){
    header("Location: /index");
}


$errors = [];
// $sql = "SELECT * FROM user WHERE email = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("s", $email);
// $stmt->execute();
// $result = $stmt->get_result();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    // if(empty($email)){
    //     $errors['email'] = 'In'
    // }

    //dd($email);


    $users = $db->query('SELECT * FROM user WHERE email = :email',
    [':email'=>$email])->find();
   // $id = $users['id'];
   
    if(!$users){
        setError('Invalid Email');
        
    }
    
    else{
        
   
    $pass=password_verify( $password , $users['password']);
    
    if($pass){
        $_SESSION['user'] = $users;
        header("Location: /index");
        exit;
    }
    
    else{
        setMsg('Invalid Password');
        
    }
    
 
}
}

include ('login.php');
