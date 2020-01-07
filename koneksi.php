<?php
$link = mysqli_connect("localhost", "root", "","dasar");
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
