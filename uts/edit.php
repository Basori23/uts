<?php
include "koneksi.php";

$id = $_GET=["id"];

if(isset($_POST["submit"] )){

if(ubah($_POST)){
        echo "<script>window.alert('data berhasil ubah');
         document.location.href='index.php'</script>";  
}else{
        echo "<script>window.alert('data gagal diubah');
        document.location.href='index.php'</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <Input></Input></title>
</head>
<body>
    <h2>Edit Data Makanan</h2>
    <form action="" method = "post">
    <a href="index.php" style="padding:0.04% 0.8%;background-color:#009900;color:#fff;border: radius 2px; font: size 50px;">Warung Makanan</a><br></br>
    <form action="simpanproses.php" method="POST">
    <table>
     <tr>
        <td>nama_makanan</td>
        <td>:</td>
        <td><Input type="text" name="nama_makanan" value = <?php echo ""?>></td>
</tr>
<tr>
        <td>harga</td>
        <td>:</td>
        <td><Input type="number" name="harga" placeholder="harga"></td>
</tr>
<tr>
        <td>stok</td>
        <td>:</td>
        <td><Input type="number" name="stok" placeholder="stok"></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td><Input type="Submit" name="Simpan" value="Simpan"></td>
</tr>
    </table>
    </form>
    </form>
</body>
</html>
