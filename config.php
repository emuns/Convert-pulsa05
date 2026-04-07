<?php
// AUTO DETECT (LOCAL / RAILWAY)
$host = getenv("MYSQLHOST") ?: "localhost";
$user = getenv("MYSQLUSER") ?: "root";
$pass = getenv("MYSQLPASSWORD") ?: "";
$db   = getenv("MYSQLDATABASE") ?: "convert_pulsa";
$port = getenv("MYSQLPORT") ?: 3306;

$conn = new mysqli($host,$user,$pass,$db,$port);

if($conn->connect_error){
 die("DB Error: ".$conn->connect_error);
}

session_start();
?>