<?php

include 'resources\auth\checkAuth.php';
checkAdmin();

include 'resources\dbResources.php';

?>

<!DOCTYPE html>
<html lang="">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layoout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<h2>Create new Most Read News</h2>

<form action="/Projekti_web_php/resources/crud/createMostRead.php" method="post">
  <label for="fname">Description:</label><br>
  <input type="text" id="description" name="description"><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

<script src="script.js"></script>
