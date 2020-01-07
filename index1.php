<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
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
        }</style>
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
            <a href="login.html">Login</a>
            <input type="text" placeholder="Search..">
          </div>

    <hr>

    <div class="grid-container">
        <div class="grid-item-kiri">Quick Akses
        <button type="submit" class="buttonside" onclick="window.location.href='barangterbaru.html'">Barang Terbaru</button><br>
        <button type="submit" class="buttonside" onclick="window.location.href='barangtelaku.html'">Barang terlaku</button></div>
        <div class="grid-item-kiri">
        <?php 
		include 'koneksi.php';
		$id = 1;
		$data = mysqli_query($link,"select * from barang");
		while($d = mysqli_fetch_array($data)){
            ?>
            <hr></hr> 
			<h1><?php echo $d['namabarang']; ?></br></h1> 
				<b>Harga : Rp.<?php echo $d['harga']; ?></b></br>
				<br><?php echo $d['deskripsi']; ?></br>
			</hr>
			<?php 
		}
		?>
        </div>
            

    </div>
    </body>
    <hr>    
    <div class="footer">Copyright @2019 right ..</div>
</html>