<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordmd5 = md5($password);

 
// update data ke database
mysqli_query($link,"update users set nama='$nama', username='$username', password='$passwordmd5' where id='$id'");
 
 // jika berhasil dan gagal
 if (!$link) {
    echo "<script>alert('Gagal Update User'); window.location.href = './update.php';</script>";
} else {
    echo "<script>alert('Update User Berhasil'); window.location.href = './dashboard1.php';</script>";
}


?>