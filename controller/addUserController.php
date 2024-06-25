<?php



$config = require('config.php');
$db = new Database($config['database']);



$role = $db->query('SELECT * FROM roles')->get();

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['cancel'])) {
        // Redirect to the profile page
        header('Location: /addUser');
        exit;
    }

   
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    

    if (empty($name)) {
        $errors['name'] = "Please Enter Your Name. ";
    }

    if (empty($username)) {
        $errors['username'] = "Please Enter Your Username. ";
    }

    if (empty($email)) {
        $errors['email'] = "Please Enter Your Email.";
    }

    if (empty($password)) {
        $errors['password'] = "Please Enter Your Password.";
    }

    if (empty($address)) {
        $errors['address'] = "Please Enter Your Address.";
    }

    if (empty($phone)) {
        $errors['phone'] = "Please Enter Your Phone Number.";
    }

    if (empty($errors)) {
        echo " User registration successful!";
        

   
        $password =  $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $db->query('INSERT INTO user(name, username, role_id, phone, email, address, password, gender)
        VALUES(:name, :username, :role_id, :phone, :email, :address, :password, :gender)', [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'role_id' => $_POST['role_id'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'password' =>$hashed_password,
            'gender' => $_POST['gender'],
    ]);
    
    }
}
   
    include ('view/addUser.php');
?>