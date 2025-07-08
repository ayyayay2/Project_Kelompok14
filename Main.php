<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
    <div class="logo">🍰 Petite Pantry</div>
    <ul class="nav-links">
        <li><a href="main.php">Home</a></li>
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="aboutus.php">About</a></li>
    </ul>
    </nav>
        <fieldset>
            <legend>
                <h2>🍰 Petite Pantry 🍰</h2>
            </legend>
    
            <div class="content-box">
                <h2>Welcome to Our Sweet Heaven!</h2>
                <img src="desseert.jpg" alt="">
                
                <br>
                                
                <h3>Where pink meets delicious 😋</h3>
            </div>
        </fieldset>
    </form>
</body>
</html>