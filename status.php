<?php
session_start();
//$_SESSION['username'] = 12;



//getting data
$_SESSION['username'];
$_SESSION['password'];
//echo $_SESSION['username'];
//echo $_SESSION['password'];




echo isset($_SESSION['username'],$_SESSION['password']);


if(isset($_SESSION['username'],$_SESSION['password'])!=0)
{

  echo "Session started";
  header("location: landing.php");


}
else {
  echo "No Session";
  header("location: login.html");
}




 ?>
