<?php
//session_start();
//$_SESSION['username'] = 12;

setcookie("username",$_SESSION['username'], time()-86400);
//setcookie("password",$password,time()-86400);


echo isset($_SESSION['username']);
if(isset($_SESSION['username'])]))
{

  echo "Session started";
  include 'landing.php';


}
else {
  echo "No Session";
  header("location: login.html");
}




 ?>
