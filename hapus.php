<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$username = $_GET['username'];
// menghapus data dari database
mysqli_query($link,"delete from users where id='$id'");
mysqli_query($link,"select from users where username='$username'");
if (!$link) {
    echo "<script>alert('Gagal Hapus Data User'); window.location.href = './hapus.php';</script>";
} else {
    echo "<script>alert('Username $username Berhasil Dihapus'); window.location.href = './dashboard1.php';</script>";
}
?>