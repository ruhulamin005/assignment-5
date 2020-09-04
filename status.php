<?php
session_start();
//$_SESSION['username'] = 12;



//getting data
$_SESSION['username'];
$_SESSION['password'];
//echo $_SESSION['username'];
//echo $_SESSION['password'];




//echo isset($_SESSION['username'],$_SESSION['password']);


if(isset($_SESSION['username'],$_SESSION['password'])!=0)
{

  //echo "Session started";
  //header("location: landing.php");
  include 'landing.php';


}
else {
  //echo "No Session";
  //session_start();
  //header("location: login.html");
  include 'login.html';
}




 ?>
