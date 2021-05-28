<?php
include '../model/database.php';
$db = new database();
?>


<h1>CRUD OOP PHP</h1>
<h2>WWW.MLASNGODING.COM</h2>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>USERNAME</th>
		<th>PRODI</th>
		<th>EMAIL</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td> <?php echo $no++; ?> </td>
		<td> <?php echo $x['username']; ?> </td>
		<td> <?php echo $x['prodi']; ?> </td>
		<td> <?php echo $x['email']; ?> </td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="../controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
<?php } ?>
