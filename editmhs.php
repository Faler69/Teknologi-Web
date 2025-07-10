<?php
require 'fungsi.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$data = ambildata($query);
$mhs = $data ? $data[0] : [];

if(isset($_POST['submit'])) 
{
    if (editmahasiswa($_POST, $id) > 0) 
    {
        echo "<script>
            alert('Data Berhasil Diedit!');
            window.location.href = 'datamhs.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diedit!');
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
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= isset($mhs["id"]) ? $mhs["id"] : '' ?>" />
        <label>Nama:</label><br>
        <input type="text" name="nama" required value="<?= isset($mhs["nama"]) ? htmlspecialchars($mhs["nama"]) : '' ?>" /> <br>
        <label>NIM:</label><br>
        <input type="text" name="nim" required value="<?= isset($mhs["nim"]) ? htmlspecialchars($mhs["nim"]) : '' ?>" /> <br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required value="<?= isset($mhs["prodi"]) ? htmlspecialchars($mhs["prodi"]) : '' ?>" /><br>
        <label>No HP:</label><br>
        <input type="text" name="nohp" required value="<?= isset($mhs["nohp"]) ? htmlspecialchars($mhs["nohp"]) : '' ?>" /><br>
        <button type="submit" name="submit">Edit</button>
    </form>
</body>
</html>
