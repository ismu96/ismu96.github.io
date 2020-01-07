<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$passwordmd5 = md5($password);

$query = mysqli_query($link,"select * from users where username='$username' and password='$passwordmd5'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);
if($cek > 0){ 	
	session_start();	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:dashboard1.php");
}else{
    echo "<script>alert('Username dan password Salah'); window.location.href = './login.html';</script>";
}
?>
