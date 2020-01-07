<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
</head>
<body>
 
	<h2>Edit Barang</h2>
	<br/>
	<a href="dashboard2.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT Barang</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($link,"select * from barang where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatebarang.php">
			<table>
				<tr>			
					<td>namabarang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<input type="text" name="namabarang" value="<?php echo $d['namabarang'];?>">
					</td>
				</tr>
				<tr>
					<td>harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga'];?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><textarea rows="4" cols="50" name="deskripsi"><?php echo $d['deskripsi'];?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>