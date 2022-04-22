<?php

include '..\auth\checkAuth.php';
checkAdmin();

include("../functions.php");


$mostDataId = $_GET['id'];

$short_text_data = delete_data(
  $db,
  "most_read",
  $mostDataId
);
?>
