<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('mysqli_connect.php');

$q = 'SELECT * FROM tbl_product';
$r = mysqli_query($dbc, $q);

if($r)
{echo '<p>Valid query/db call.</p>';}
else
{echo mysqli_error($dbc);}

while ($row = mysqli_fetch_array($r)) {
    echo "<li>".$row[productName]."</li>";
}
