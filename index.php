<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP with MySQL :: Connecting MySQL Server - Generic</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'admin';
         $dbpass = 'Admin123!';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
      ?>
   </body>
</html>
