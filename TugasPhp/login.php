<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem RPL</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; margin-top: 100px;">
    <h2>Silakan Login</h2>

    <form action="cek_login.php" method="POST">
        <label for="user">Username:</label>
        <input type="text" id="user" name="user" required>
        <br><br>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required>
        <br><br>

        <button type="submit">Masuk</button>
    </form>
</body>
</html>
