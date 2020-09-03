

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php

     session_start();
     session_destroy();
     echo "You logged out";




      ?>
      <br>
      <a href="index.html" class="w3-btn w3-black">main</a>
      <br> <br>
      <a href="status.php" class="w3-btn w3-black">Login</a>


   </body>
 </html>
