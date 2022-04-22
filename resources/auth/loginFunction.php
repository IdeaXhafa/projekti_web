<?php

include("../functions.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) && isset($_POST['username'])) {
    $welcoming_data = check_login(
        $db,
        $username,
        $password
    );
}else{
    die("Something went wrong!");
}

?>