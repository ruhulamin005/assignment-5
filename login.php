<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php


    //opening file



    $username=$_GET["username"];

    $password=$_GET["password"];

    //file section here
    //reading file from file
      $myfile = fopen("testread.txt", "a");
      $myfile = "textfile.txt";
      $data = file_get_contents($myfile);

    //  echo $data;

    $text = explode("\n",$data);



    // cmparing username and password

    if($text[0]==$username && $text[1]==$password)
    {

      include 'landing.html';
    }
    else {
      echo "Pass doesnot match";
      include'login.html';
    }
    ?>

  </body>
</html>
