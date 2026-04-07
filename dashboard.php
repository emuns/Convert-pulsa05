<?php
include '../config.php';
if(!isset($_SESSION['admin'])) die("Login dulu");

$data=$conn->query("SELECT * FROM transaksi");
?>

<h2>Dashboard</h2>
<table border="1">
<tr><th>ID</th><th>Nomor</th><th>Provider</th><th>Nominal</th></tr>

<?php while($d=$data->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['nomor'] ?></td>
<td><?= $d['provider'] ?></td>
<td><?= $d['nominal'] ?></td>
</tr>
<?php endwhile; ?>

</table>