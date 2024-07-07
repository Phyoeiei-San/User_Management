<?php

$config = require('config.php');
$db = new Database($config['database']);

if(!isset($_SESSION['user'])){
    header("Location: /login");
}

include ('logout.php');