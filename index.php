<?php 
$koneksi = mysqli_connect("localhost","root","","php-api"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DataSiswa</title>
</head>
<body>
	<a href="input.php" class="add">+ Tambah Data</a>	
	<table border="1" align="center" width="70%">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
		</tr>
		<?php 
			$qry = mysqli_query($koneksi,"SELECT * FROM users");
			while ($datasiswa = mysqli_fetch_array($qry)) {
		?>
			<tr>
			<td align="center"><?php echo $datasiswa['id']; ?></td>
			<td><?php echo $datasiswa['username']; ?></td>
			<td><?php echo $datasiswa['password']; ?></td>
			<td><?php echo $datasiswa['level']; ?></td>
			<td><?php echo $datasiswa['fullname']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>