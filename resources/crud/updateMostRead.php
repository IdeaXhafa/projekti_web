<?php

include '..\auth\checkAuth.php';
checkAdmin();

include("../functions.php");



if (isset($_REQUEST['description']) && isset($_REQUEST['dataId'])) {
    $arts_data = update_data(
        $db,
        "most_read",
        'description',
        $_REQUEST['description'],
        $_REQUEST['dataId']
    );
}

?>