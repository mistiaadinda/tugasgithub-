<?php
include '../model/database.php';
$db = new database();
?>

<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Edit Data User</h3>

<form action = "../controller/proses.php?aksi=update" method="post">

<?php
foreach ($db->edit($_GET['id']) as $d) {
	
?>
<table>
	<tr>
		<td>Username</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id']?>">
			<input type="text" name="username" value="<?php echo $d['username']?>">
		</td>
	</tr>
	<tr>
		<td>Program Pendidikan</td>
		<td>
			<input type="text" name="prodi" value="<?php echo $d['prodi']?>">
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>
			<input type="text" name="email" value="<?php echo 
		$d['email']?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" value="Simpan">
		</td>
	</tr>
</table>
<?php } ?>
</form>