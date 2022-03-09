<?php
$server = "localhost";
$username = "root";
$pass = ""; 
$database = "usbt_airlines";
$conn = new mysqli($server,$username,$pass,$database);
session_start();
if($conn->connect_error){
   die($conn->connect_error); 
}

?>