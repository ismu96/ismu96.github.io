<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$namabarang = $_POST['namabarang'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];


 
// update data ke database
mysqli_query($link,"update barang set namabarang='$namabarang', harga='$harga', deskripsi='$deskripsi' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:dashboard2.php");
?>