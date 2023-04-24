<?php
$server = "localhost:8889";
$database = "The_Leveret";
$username = "root"; 
$password = "root";


try{
$conn = new PDO("mysql:host=$server;dbname=$database;", $username,
$password);
} catch(PDOException $e){
die( "Connection failed: " . $e->getMessage()); }
?>