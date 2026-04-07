<?php
include 'config.php';

$data=$conn->query("SELECT * FROM transaksi ORDER BY id DESC");
?>

<h2>Riwayat Transaksi</h2>
<table border="1">
<tr><th>No</th><th>Nomor</th><th>Nominal</th><th>Hasil</th><th>Status</th></tr>

<?php while($d=$data->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['nomor'] ?></td>
<td><?= $d['nominal'] ?></td>
<td><?= $d['hasil'] ?></td>
<td><?= $d['status'] ?></td>
</tr>
<?php endwhile; ?>

</table>