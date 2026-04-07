<?php
include 'config.php';

// BUAT FOLDER UPLOAD JIKA BELUM ADA
if(!file_exists("uploads")){
 mkdir("uploads");
}

$nomor=$_POST['nomor'];
$provider=$_POST['provider'];
$nominal=$_POST['nominal'];
$tujuan=$_POST['tujuan'];

// RATE
if($provider=="Telkomsel") $rate=0.85;
elseif($provider=="XL") $rate=0.8;
else $rate=0.75;

$hasil=$nominal*$rate;

// UPLOAD FILE
$nama_file=time()."_".$_FILES['bukti']['name'];
$tmp=$_FILES['bukti']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$nama_file);

// SIMPAN DB
$conn->query("INSERT INTO transaksi 
(nomor,provider,nominal,tujuan,rate,hasil,bukti) 
VALUES 
('$nomor','$provider','$nominal','$tujuan','$rate','$hasil','$nama_file')");

// TELEGRAM (OPTIONAL)
$token="ISI_TOKEN";
$chat_id="ISI_CHAT_ID";

if($token!="ISI_TOKEN"){
$text="🔥 ORDER BARU
Nomor: $nomor
Provider: $provider
Nominal: $nominal
Hasil: $hasil";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($text));
}

echo "<script>alert('Order berhasil');window.location='index.php';</script>";
?>