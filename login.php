<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - WEB TEKNOLOGI INFORMASI</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="login.php" method="post" enctype="multipart/form-data" >
        <label>Email</label><br>
        <Input type="email" name="email"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="checkbox" name="Ingat" value="Remember"> Remember Me!<br>
        <input type="submit" value="Login">
    </form>
    <p>Belum punya akun? <a href="register.html">Daftar disini</a></p>
</body>
</html>