<!DOCTYPE html>
<html>
<head>
<title>Convert</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family:Poppins;background:#6366f1;color:#fff;text-align:center}
.box{background:#fff;color:#000;padding:20px;border-radius:10px;margin:40px auto;width:300px}
input,select{width:100%;padding:10px;margin:5px}
button{width:100%;padding:10px;background:#6366f1;color:#fff;border:none}
</style>
</head>
<body>

<div class="box">
<h2>Convert Pulsa</h2>

<form action="proses.php" method="POST" enctype="multipart/form-data">

<input name="nomor" placeholder="Nomor HP" required>

<select name="provider" id="provider">
<option>Telkomsel</option>
<option>XL</option>
<option>Indosat</option>
</select>

<input name="nominal" id="nominal" placeholder="Nominal" required>

<input name="tujuan" placeholder="DANA/OVO" required>

<input type="file" name="bukti" required>

<p>Estimasi: <b id="hasil">0</b></p>

<button>Convert</button>
</form>

</div>

<script>
let r={Telkomsel:0.85,XL:0.8,Indosat:0.75};
function hitung(){
 let p=document.getElementById('provider').value;
 let n=document.getElementById('nominal').value;
 document.getElementById('hasil').innerText=n*r[p]||0;
}
document.getElementById('nominal').oninput=hitung;
document.getElementById('provider').onchange=hitung;
</script>

</body>
</html>