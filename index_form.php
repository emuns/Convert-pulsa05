<!DOCTYPE html>
<html>
<head>
<title>Form Convert</title>
<style>
body{font-family:sans-serif;background:#0f172a;color:#fff;padding:20px}
input,button{padding:10px;margin:10px 0;width:100%}
button{background:#22c55e;color:#fff;border:none}
</style>
</head>
<body>

<h2>Convert Pulsa</h2>

<form action="proses.php" method="POST">
<input type="text" name="nomor_hp" placeholder="Nomor HP" required>
<input type="text" name="provider" placeholder="Provider" required>
<input type="number" name="nominal" placeholder="Nominal" required>
<input type="text" name="tujuan" placeholder="Rekening / E-wallet" required>

<button type="submit">Kirim</button>
</form>

</body>
</html>