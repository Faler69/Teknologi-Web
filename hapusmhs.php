<?php

require 'fungsi.php';
$id = $_GET['id'];
if(hapusmhs($id) > 0) {
    echo "
    <script>
        alert('Data Mahasiswa Berhasil Dihapus!');
        window.location.href = '../datamhs.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data Mahasiswa Gagal Dihapus!');
        window.location.href = '../datamhs.php';
    </script>";
}



