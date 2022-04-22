<?php

include '..\auth\checkAuth.php';
checkAdmin();

include("../functions.php");

if (isset($_POST['description'])) {
    $arts_data = create_data(
        $db,
        "most_read",
        ['description'],
        [$_POST['description']]
    );
}

?>