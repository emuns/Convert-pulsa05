<?php
include 'config.php';

$nomor   = $_POST['nomor_hp'];
$provider= $_POST['provider'];
$nominal = $_POST['nominal'];
$tujuan  = $_POST['tujuan'];

$rate = 0.8; // rate 80%
$hasil = $nominal * $rate;

$query = "INSERT INTO transaksi 
(nomor_hp, provider, nominal, tujuan, rate, hasil, status) 
VALUES 
('$nomor','$provider','$nominal','$tujuan','$rate','$hasil','pending')";

if(mysqli_query($conn, $query)){
    echo "Berhasil! Saldo masuk: Rp $hasil";
}else{
    echo "Gagal: " . mysqli_error($conn);
}
?>