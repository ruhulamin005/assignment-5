

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>






    <?php

    //session checking

    session_start();



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

      setcookie("username",$username,time()+(86400));
      setcookie("password",$password,time()+86400);
      //setting session value
      $_SESSION['username'] = "$username";
      $_SESSION['password'] = "$password";
      echo $_SESSION['username'];
      echo $_SESSION['password'];

      include 'landing.php';
    }
    else {
      echo "Pass doesnot match";
      header("location:login.html");
    }
    ?>

  </body>
</html>
