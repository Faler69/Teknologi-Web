<?php
    $koneksi = mysqli_connect("localhost:3307", "root", "", "webti");

    if(!$koneksi)
    {
        die("koneksi Gagal!" . mysqli_connect_error());
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
        <center>
        <nav align="center">
            <a href="index.php">HOME </a> |
            <a href="profile.php">PROFILE</a> |
            <a href="about.php">ABOUT US</a> |
            <a href="login.php">LOGIN</a> |
            <a href="datamhs.php">DATA MAHASISWA</a> 
            </center>
             
        </nav>
        <h1 align="center">
        <img src="https://i.pinimg.com/736x/8d/6f/64/8d6f642f1f9784c1cc2c7408d0fe4ee7.jpg" width="230" />
    </h1>
    <p>
        <b>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa</b>
         Fufufafa Fufufafa <i>Fufufafa Fufufafa Fufufafa Fufufafa</i>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa 
         <i><b><u>Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa Fufufafa</i></b></u>
    </p>
        <h2>Daftar Belanja</h2>
        <ol>
            <li>Daging
                <ul>
                    <li>Daging Ayam 2kg</li>
                    <li>Daging Sapi 3kg</li>
                    <li>Daging Kambing 2kg</li>
                </ul>
            </li>
            <li>Sayuran
                <ul>
                    <li>Kubis</li>
                    <li>Terong</li>
                </ul>
            </li>
            <li>Minyak
                <ul>
                    <li>Bimoli</li>
                    <li>Filma</li>
                </ul>
            </li>
            <li>Pakaian
                <ul>
                    <li>Kaos</li>
                    <li>Celana</li>
                    <li>Jaket</li>
                </ul>
            </li>
        </ol>
    </body>
</html>
