<?php

include 'resources\auth\checkAuth.php';
checkAdmin();

include 'resources\dbResources.php';

$mostDataId = $_GET['id'];
$mostDataDescription = $_GET['description'];

?>

<!DOCTYPE html>
<html lang="">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layoout.css" rel="stylesheet" type="text/css" media="all">
<link href="updateForm.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<h2>Update new Most Read News</h2>

<form action="/Projekti_web_php/resources/crud/updateMostRead.php" method="PUT">
  <label for="fname">Description:</label>
  <br>
  <label for="fname">Last Value:</label><br>
  <input type="hidden" id="dataId" name="dataId" value="<?php echo $mostDataId ?>"><br>
  <input type="text" disabled value="<?php echo $mostDataDescription ?>"><br>

  <label for="fname">New Value:</label><br>
  <input type="text" id="description" name="description"><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

<script src="script.js"></script>
