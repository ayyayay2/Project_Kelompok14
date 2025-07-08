<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['user'] = $data['username'];
        header("Location: main.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Petite Pantry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="login-box">
        <h2>🍰 Login to Petite Pantry</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username kamu..." required>
            <input type="password" name="password" placeholder="Password rahasia..." required>
            <input type="submit" value="Masuk">
        </form>
        <?php if (isset($error)) echo "<div class='error-msg'>$error</div>"; ?>
    </div>
</body>
</html>
