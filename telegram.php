<?php

$token = "8388225388:AAGfghfPKH7WAorwH3IRwQqqUTywPwr0a6o";

$data = json_decode(file_get_contents("php://input"), true);

$chat_id = $data["message"]["chat"]["id"];
$text = $data["message"]["text"];

// AUTO REPLY
if($text == "/start"){
    $reply = "Selamat datang di Convert Pulsa 🔥\nKetik:\n1. Cek Rate\n2. Bantuan";
}
elseif($text == "1"){
    $reply = "Rate:\nTelkomsel: 0.85\nXL: 0.8\nIndosat: 0.75";
}
else{
    $reply = "Perintah tidak dikenal 😅";
}

// Kirim balasan
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($reply));

?>