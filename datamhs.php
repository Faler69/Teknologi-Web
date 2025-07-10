<?php

require 'fungsi.php'; 

$query = "SELECT * FROM mahasiswa";

$rows = ambildata($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATA MAHASISWA</title>
    </head>
<body>
    <h1>data mahasiswa</h1>
    <a href="tambahmhs.php"><button>Tambah Data</button></a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>no</th>
            <th>foto</th>
            <th>nama</th>
            <th>nim</th>
            <th>jurusan</th>
            <th>no. hp</th>
        </tr>
        <?php
        $no = 1;
        if (!empty($rows)) {
            foreach($rows as $mhs) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mhs["nama"]?></td>
                <td><?php echo $mhs["nim"]?></td>
                <td><?php echo $mhs["prodi"]?></td>
                <td><?php echo $mhs["nohp"]?></td>
                <td>
                    <a href="hapusmhs.php?id=<?=$mhs['id']?>" 
                     onclick="return confirm('yakin?')";>Hapus</a> |
                    <a href="editmhs.php?id=<?=$mhs['id']?>">Edit</a>
                </td>
            </tr>
        <?php }
        } else { ?>
            <tr>
                <td colspan="6" align="center">Data tidak ada.</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
