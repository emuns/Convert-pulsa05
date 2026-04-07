<?php
include "config.php";

$nomor = $_POST['nomor'];
$provider = $_POST['provider'];
$nominal = $_POST['nominal'];
$tujuan = $_POST['tujuan'];

$query = mysqli_query($conn, "INSERT INTO transaksi (nomor, provider, nominal, tujuan) VALUES ('$nomor','$provider','$nominal','$tujuan')");

if($query){
    echo "Berhasil dikirim!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>