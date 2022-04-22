<?php

include("../functions.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    create_data(
        $db,
        "users",
        ['username', 'password'],
        [$username, hash('md5', $password)]
    );
}
?>