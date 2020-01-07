<?php
if (isset($_POST['nama']) && $_POST['nama']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // cek nilai variable
    if (empty($nama)) {
        header('location: ./daftar.php?error=' .base64_encode('Nama tidak boleh kosong'));
    }
    if (empty($username)) {
        header('location: ./daftar.php?error=' .base64_encode('Username tidak boleh kosong'));   
    }
    if (empty($password)) {
        header('location: ./daftar.php?error=' .base64_encode('Password tidak boleh kosong'));   
    }
    
    // encryption dengan md5
    $password = md5($password); 
    // SQL Insert
    $sql = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
    $insert = $link->query($sql);
    echo "Input Berhasil";
    // jika gagal
    if (! $insert) {
        echo "<script>alert('".$link->error."'); window.location.href = './daftar.html';</script>";
    } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './login.html';</script>";
    }
}
?>