<?php
include '../config.php';

$id=$_GET['id'];
$status=$_GET['status'];

$conn->query("UPDATE transaksi SET status='$status' WHERE id=$id");

header("Location: dashboard.php");
?>