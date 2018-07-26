<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP with MySQL :: Connecting MySQL Server - MySQLi</title>
   </head>
   <body>
       <h1>Connecting MySQL Server - MySQLi</h1>
      <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'admin';
         $dbpass = 'Admin123!';
         $dbname = 'DWD272db1';
         $conn = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
         
         
         //$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_ error());
      ?>
   </body>

</html>
