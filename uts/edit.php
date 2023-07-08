<?php
include "koneksi.php";
$data =mysqli_query($koneksi ,"SELECT * FROM tb_makanan");
        $isil= mysqli_fetch_array($data);
            
$id = $_GET=["id_makanan"];

if(isset($_POST["submit"] )){

if(ubah($_POST)){
        echo "<script>window.alert('data berhasil ubah');
         document.location.href='index.php'</script>";  
}else{
        echo "<script>window.alert('data gagal diubah');
        document.location.href='edit,php'</script>";
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
    
    <a href="index.php" style="padding:0.04% 0.8%;background-color:#009900;color:#fff;border: radius 2px; font: size 50px;">Warung Makanan</a><br></br>
    <form action="prosesedit.php" method="POST">
    <table>
     <tr>
        <td>nama_makanan</td>
        <td>:</td>
       <Input type="hidden" name="id" value = "<?php echo $isil['id_makanan']?>">
        <td><Input type="text" name="namamakanan" value = "<?php echo $isil['nama_makanan']?>"></td>
</tr>
<tr>
        <td>harga</td>
        <td>:</td>
        <td><Input type="number" name="harga" placeholder="harga" value = "<?php echo $isil['harga']?>"></td>
</tr>
<tr>
        <td>stok</td>
        <td>:</td>
        <td><Input type="number" name="stok" placeholder="stok" value = "<?php echo $isil['stok']?>"></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td><Input type="Submit" name="Simpan" value="Simpan"></td>
</tr>
    </table>
    </form>
  
</body>
</html>
