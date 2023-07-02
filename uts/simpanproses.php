<?php 
include 'koneksi.php';
$nama_makanan   = $_POST['nama_makanan'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];

$tambah =mysqli_query($koneksi, "INSERT INTO tb_makanan (id_makanan,nama_makanan,harga,stok)value (NULL,'$nama_makanan','$harga','$stok')");
if ($tambah) {
    echo "<script>window.alert('data berhasil ditambah');window.location.href='index.php'</script>";
} else {
    echo"<script>window.alert('data gagal ditambah');window.location.href='index.php'</script>";
}


?>