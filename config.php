<?php
$host = "YOUR_HOST";
$user = "YOUR_USER";
$pass = "YOUR_PASSWORD";
$db   = "YOUR_DB";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>