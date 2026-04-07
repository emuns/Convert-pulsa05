<?php
include '../config.php';
if(!isset($_SESSION['admin'])) die("Login dulu");

$data=$conn->query("SELECT * FROM transaksi ORDER BY id DESC");
?>

<meta http-equiv="refresh" content="5">

<h2>Dashboard</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Nomor</th>
<th>Nominal</th>
<th>Status</th>
<th>Bukti</th>
<th>Aksi</th>
</tr>

<?php while($d=$data->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['nomor'] ?></td>
<td><?= $d['nominal'] ?></td>
<td><?= $d['status'] ?></td>
<td><img src="../uploads/<?= $d['bukti'] ?>" width="80"></td>
<td>
<a href="update.php?id=<?= $d['id'] ?>&status=sukses">Sukses</a>
<a href="update.php?id=<?= $d['id'] ?>&status=batal">Batal</a>
</td>
</tr>
<?php endwhile; ?>

</table>