<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER - WEB TEKNOLOGI INFORMASI</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <label>Nama Lengkap</label><br>
        <input type="text" name="nama"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <label>Umur</label><br>
        <input type="number" name="umur"><br>
        <label>Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir"><br>
        <label>Warna Favorit</label><br>
        <input type="color" name="warna"><br>
        <label>Foto Profil</label><br>
        <input type="file" name="foto"><br>
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
        <label>Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
        <input type="checkbox" name="hobi[]" value="Traveling"> Traveling<br>
        <input type="checkbox" name="hobi[]" value="Memasak"> Memasak<br>
        <label>Negara</label>
        <br>
        <select name="negara">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
            <option value="Thailand">Thailand</option>
            <option value="Brunei">Brunei</option>
            <option value="Filipina">USA</option>
            <option value="Vietnam">UK</option>
        </select></br>
        <label>Biografi Singkat</label><br>
        <textarea name="biografi" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Register">
    </form>
    <p>Sudah punya akun? <a href="login.html">Login disini</a></p>
