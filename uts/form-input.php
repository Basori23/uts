<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <Input></Input></title>
</head>
<body>
    <h2>Iput Data Makanan</h2>
    <a href="index.php" style="padding:0.04% 0.8%;background-color:#009900;color:#fff;border: radius 2px; font: size 50px;">Warung Makanan</a><br></br>
    <form action="simpanproses.php" method="POST">
    <table>
     <tr>
        <td>nama_makanan</td>
        <td>:</td>
        <td><Input type="text" name="nama_makanan" placeholder="Masukkan Nama Makanan"></td>
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

</body>
</html>