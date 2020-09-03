<?php
//opening file

$myfile = fopen("textfile.txt", "w");

$username=$_GET["username"];


fwrite($myfile, $username);
fwrite($myfile, "\n");


echo "<br>";
$password=$_GET["password"];



fwrite($myfile, $password);

fclose($myfile);

echo "Sign Up successful";
include'index.html';


 ?>
