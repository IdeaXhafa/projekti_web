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

<h2>Create a News in the Most Read section:</h2>

<button><a href="/Projekti_web_php/adminPanel_create.php">Create</a></button>


<h2><br>Edit Most Read News:</h2>

<div>
        <div>
            <table id="productTable" class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach($most_read_data as $data){ ?>
                      <tr>
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['description'] ?></td>
                          <td><button><a
                           href="/Projekti_web_php/adminPanel_edit.php?id=<?php echo $data["id"]; ?>&description= <?php echo $data["description"] ?>">
                           Update
                        </a></button></td>
                          <td><button><a
                           onclick="return confirm('Are you sure you want to delete this item?');"
                           href="/Projekti_web_php/resources/crud/deleteMostRead.php?id=<?php echo $data["id"]; ?>">
                           Delete
                        </a></button></td>
                      </tr>
                    <?php } ?>
                </thead>
            </table>
        </div>
    </div>

</body>
</html>

<script src="script.js"></script>
