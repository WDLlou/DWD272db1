<?php # Script 9.2 - mysqli_connect.php 2
// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.
/*
// Set the database access information as constants:
DEFINE ('DB_USER', 'admin');
DEFINE ('DB_PASSWORD', 'Admin123!');
DEFINE ('DB_HOST', 'localhost:3306');
DEFINE ('DB_NAME', 'DWD272db1');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');

*/


$servername = "localhost"; // no port number!!;
$username = "admin";
$password = "Admin123!";
$dbname = "DWD272db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
