<?php

$loginMsg = '1';

if(isset($_GET['msg'])){
  $loginMsg = $_GET['msg'];
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <style>
      div {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: clip;
      }
    </style>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="loginStyle.css">
  </head>
  <body>
  
      <div class="center">
      <h1>Login form</h1>

      <form action="/Projekti_web_php/resources/auth/loginFunction.php" method="post">

        <?php if($loginMsg == '2'){ ?>
        <div class="txt_field">
          <p>Username or Password is incorrect</p>
        </div>
        <?php } ?>
        
        <div class="txt_field">
          <input type="text" id="username_field" name="username" required>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" id="password_field" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <div class="pass">Forgot Password?</div>
        <input type="submit" class="loginButton" value="Login">
        <div class="signup_link">
        </div>
      </form> 
    </div>

  </body>
</html>

<script src="script.js"></script>
