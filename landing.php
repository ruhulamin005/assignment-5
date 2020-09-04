<?php

  //setcookie("username",$username,time()-86400);
  //setcookie("password",$password,time()-86400);
  $_SESSION['username'];
  $_SESSION['password'];

  //echo $_SESSION['username'];
  //echo $_SESSION['password'];


//echo isset($_SESSION['username'],$_SESSION['password']);

  if(isset($_SESSION['username'],$_SESSION['password'])!=0)
  {
    //session_start();
    //setcookie("username",$username,time()+86400);
    //setcookie("password",$password,time()+86400);
    //echo "Session started";


  }


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <h1>Welcome</h1>
    <h2>You have done a successful login</h2>

    <h1>Click to choose option</h1>


  <a href="signUp.html" class="w3-btn w3-black">signUp</a>
  <br>
  <br>

  <div class="container">
    <a href="status.php" class="w3-btn w3-black">Login  </a>
    <a href="logout.php" class="w3-btn w3-black">logout  </a>
    <a href="index.html" class="w3-btn w3-black"> Main</a>
  </div>



  </body>
</html>
