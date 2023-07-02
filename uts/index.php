<!DOCTYPE html>
<?php include 'koneksi.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>warung makan</h2>
    <a href="form-input.php" style="padding:0.04% 0.8%;background-color:#009900;color:#fff;border: radius 2px; font: size 50px;">Tambah Makanan</a><br></br>
    <table border="1" width="50%">
        <tr>
            <td>No</td>
            <td>Nama Makanan</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>opsi</td>
        </tr>
        <body>
        <?php 
        $No = 1;
        $data =mysqli_query($koneksi ,"SELECT * FROM tb_makanan");
        while ($isi= mysqli_fetch_array($data)){
            
        ?>
        <tr>
            <td><?php echo $No++ ?></td>
            <td><?php echo $isi['nama_makanan'];?></td>
            <td><?php echo $isi['harga'];?></td>
            <td><?php echo $isi['stok'];?></td>
            <td>
            <a href ="ubah.php?id=<?= $row['id'];?>">Edit</a> ||
            <a href ="">delete</a>
            </td>
        </tr>
        <?php } ?>
            
        </body>
        
    </tr>
    </tr>
    </table>
</body>
</html>