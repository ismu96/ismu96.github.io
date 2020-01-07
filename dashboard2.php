<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>

<hr>
    <img src="emarket.png" alt="logo emarket" class="center">
    
    <P class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium corrupti iure aliquam ea quasi dolore libero laboriosam assumenda, ratione officia placeat in est eligendi quam veritatis soluta, voluptatibus eum?</P>
    <hr>
    <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#Product">Product</a>
            <a href="#totaluser">Total</a>
            <a href="#Testing">About</a>
            <input type="text" placeholder="Search..">
          </div>

    <hr>

    <form method="post" action="login.php" >
        <fieldset>
        <legend>Daftar Database Website EMARKET</legend>
		<button><a href="dashboard1.php">Data User</a></button>
		<button><a href="dashboard2.php">Data Barang</a></button>
		
        </form>
	
	
	<br/>
	<a href="tambah.html">Tambah Barang</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama Barang</th>
			<th>Harga</th>
            <th>deskripsi</th>
            <th>Action</th>
        </tr>
        <tr></tr>

		<?php 
		include 'koneksi.php';
		$id = 1;
		$data = mysqli_query($link,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $id++; ?></td>
				<td><?php echo $d['namabarang']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['deskripsi']; ?></td>
				<td>
					<a href="editbarang.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapusbarang.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>