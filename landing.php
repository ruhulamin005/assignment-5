<?php

  setcookie("username",$username,time()-86400);
  setcookie("password",$password,time()-86400);

  $_SESSION['username'] = "$username";
  $_SESSION['password'] = "$password";
  echo $_SESSION['username'];
  echo $_SESSION['password'];

  if(isset($_SESSION['username']))
  {
    session_start();
    echo "Session started";


  }


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Welcome</h1>
    <h2>You have done a successful login</h2>

    <h1>Click to choose option</h1>


  <a href="signUp.html" class="w3-btn w3-black">signUp</a>
  <br>
  <br>

  <a href="status.php" class="w3-btn w3-black">Login</a>

  </body>
</html>
