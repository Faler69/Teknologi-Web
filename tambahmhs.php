<?php
require 'fungsi.php';
if(isset($_POST['submit'])) 
{
    if (tambahdatamhs($_POST)> 0) 
    {
        echo "<script>
            alert('Data Mahasiswa Berhasil Ditambahkan!');
            window.location.href = 'datamhs.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Mahasiswa Gagal Ditambahkan!');
            window.location.href = 'tambahmhs.php';
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahmhs.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>
        
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br>
        
        <label>No HP:</label><br>
        <input type="text" name="nohp" required><br><br>
        
        <button type="submit" name="submit">Simpan Data</button>
    </form>
</body>
</html>
