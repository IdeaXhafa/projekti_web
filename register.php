<?php

require_once "resources/functions.php";
 
?>
 

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
      <h1>Sign Up form</h1>

      <form action="/Projekti_web_php/resources/auth/registerFunction.php" method="post">

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
        
        <input type="submit" value="Register">
        <div class="signup_link">
        </div>
      </form> 
    </div>

  </body>
</html>

<script src="script.js"></script>
