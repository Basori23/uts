<?php 
	include "koneksi.php";

	$id = $_POST['id'];
    $nama_makanan=$_POST['namamakanan'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];



	$ubah = mysqli_query($koneksi,"UPDATE tb_makanan SET nama_makanan='$nama_makanan',harga='$harga',stok='$stok' WHERE id_makanan=$id");
if($ubah){
    header('location:index.php');
}