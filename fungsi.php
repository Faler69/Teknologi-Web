<?php

    $koneksi = mysqli_connect("localhost:3307", "root", "", "webti");

    if(!$koneksi)
    {
        die("koneksi Gagal!" .mysqli_connect_error());
    }

    function ambildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            // Tampilkan pesan error jika query gagal
            die("Query error: " . mysqli_error($koneksi));
        }
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahdatamhs($data)
    {
        global $koneksi;

        $nama = $data['nama'];
        $nim = $data['nim'];
        $prodi = $data['jurusan'];
        $nohp = $data['nohp'];

        $query = "INSERT INTO mahasiswa (nama, nim, prodi, nohp) VALUES ('$nama', '$nim', '$prodi', '$nohp')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi); 
    }

    function hapusmhs($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
    
    function editmahasiswa($data, $id)
    {
        global $koneksi;

        $id = $data['id'];
        $nama = $data['nama'];
        $nim = $data['nim'];
        $prodi = $data['jurusan'];
        $nohp = $data['nohp'];

        $query = "UPDATE mahasiswa SET 
        nama='$nama', 
        nim='$nim', 
        prodi='$prodi', 
        nohp='$nohp'
         WHERE id=$id";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

?>
