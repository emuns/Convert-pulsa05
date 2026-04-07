   <!DOCTYPE html>
<html>
<head>
    <title>Form Convert Pulsa</title>
</head>
<body>

<h2>Form Convert Pulsa</h2>

<form action="proses.php" method="POST">
    <label>Nomor HP:</label><br>
    <input type="text" name="nomor" required><br><br>

    <label>Provider:</label><br>
    <input type="text" name="provider" required><br><br>

    <label>Nominal:</label><br>
    <input type="number" name="nominal" required><br><br>

    <label>Tujuan (DANA/OVO/Bank):</label><br>
    <input type="text" name="tujuan" required><br><br>

    <button type="submit">Kirim</button>
</form>

</body>
</html>