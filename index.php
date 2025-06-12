<?php
    
    $koneksi = mysqli_connect("localhost:3307" ,"root" ,"" ,"webti_farel");

    if($koneksi)
    {
        die("koneksi Gagal!" .mysqli_connect_error());
    }
    else
    {
        echo "Koneksi Berhasil!";
    }

?>






<!DOCTYPE html>
<html>
    <head>
        <title>
            WEB TEKNOLOGI INFORMASI
        </title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 align="center">WEBSITE <br> TEKNOLOGI INFORMASI</h1>
        <hr width="50%" size="2px" color="black">
        <nav align="center">
            <a href="index.php">HOME </a> |
            <a href="profile.php">PROFILE</a> |
            <a href="about.php">ABOUT US</a> |
            <a href="login.php">LOGIN</a> 
             
        </nav>
        <h1 align="center">
        <img src="https://i.pinimg.com/736x/8d/6f/64/8d6f642f1f9784c1cc2c7408d0fe4ee7.jpg" width="230" />
    </h1>
    <p>
        <b>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa</b>
         Fufufafa Fufufafa <i>Fufufafa Fufufafa Fufufafa Fufufafa</i>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa 
         <i><b><u>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa</i></b></u>
    </p>
        <h2>Daftar Belanja</h2>
        <ol>
            <ll>Daging</ll>
            <ul><li>Daging Ayam 2kg</li></ul>
            <ul><li>Daging Sapi 3kg</li></ul>
            <ul><li>Daging Kambing 2kg</li></ul>
            <ll>Sayuran</ll>
            <ul><li>Kubis</li></ul>
            <ul><li>Terong</li></ul>
            <ll>Minyak</ll>
            <ul><li>Bimoli</li></ul>
            <ul><li>Filma</li></ul>
            <ll>Pakaian</ll>
            <ul><li>Kaos</li></ul>
            <ul><li>Celana</li></ul>
            <ul><li>Jaket</li></ul>
        </ol>
    </body>
</html>