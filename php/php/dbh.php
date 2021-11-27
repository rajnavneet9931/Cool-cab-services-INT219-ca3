<?php

// session_start();
if (isset($_SESSION['username'])) {
    
   // echo "string";

   $var=$_SESSION['username'];
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}