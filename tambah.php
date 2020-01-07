<?php
if (isset($_POST['namabarang']) && $_POST['namabarang']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    // cek nilai variable
    if (empty($namabarang)) {
        header('location: ./daftar.php?error=' .base64_encode('namabarang tidak boleh kosong'));
    }
    if (empty($harga)) {
        header('location: ./daftar.php?error=' .base64_encode('harga tidak boleh kosong'));   
    }
    if (empty($deskripsi)) {
        header('location: ./daftar.php?error=' .base64_encode('deskripsi tidak boleh kosong'));   
    }
    
    // SQL Insert
    $sql = "INSERT INTO barang (namabarang, harga, deskripsi) VALUES ('$namabarang', '$harga', '$deskripsi')";
    $insert = $link->query($sql);
    echo "Input Berhasil";

    // jika berhasil dan gagal
    if (!$insert) {
        echo "<script>alert('".$link->error."'); window.location.href = './tambah.html';</script>";
    } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './dashboard2.php';</script>";
    }}

?>