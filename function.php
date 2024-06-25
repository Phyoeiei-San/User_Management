
<?php

function dd($vaule)
{
    echo "<pre>";
    var_dump($vaule);
    echo "</pre>";
    die();
}

function setError($message)
{
    $_SESSION['errors'] = [];
    $_SESSION['errors'][] = $message;
}

function showError()
{
    if(isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
        $_SESSION['errors'] = [];
        if(count($errors)){
            foreach ($errors as $e){
                echo "<h5 class='text-danger'>$e</span>";
                
            }
        }
    }
    
}

function setMsg($message)
{
    $_SESSION['msg'] = [];
    $_SESSION['msg'][] = $message;
}

function showMsg()
{
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        $_SESSION['msg'] = [];
        if(isset($_SESSION['msg']) and count($msg)){
            foreach ($msg as $e){
                echo "<h5 class='text-success'>$e</span>";
            }
        }
    }
    
}

// function hasError()
// {
//     $errors = $_SESSION['errors'];
//     if(count($errors)){
//         return true;
//     }
//     return false;
// }
function hasError($errors = null) { 
    // Ensure 'errors' is defined and is an array 
    if (!is_array($errors)) { $errors = []; } 
    // Rest of the function 
    if (count($errors) > 0) {
     // Handle errors 
     return true; } else { return false; }
     }

