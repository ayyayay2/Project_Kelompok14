<?php
include 'koneksi.php';
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
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
        <fieldset class="menu-container">
            <legend class="menu-title">
                <h2>Petite Pantry</h2>
            </legend>
    
            <div class="menu-content">
                <h2>🌸 DESSERT MENU 🌸</h2>

                <table class="sweet-menu">
                    <tr>
                        <th>No.</th>
                        <th>Dessert</th>
                        <th>Price</th>
                        <th>Portion</th>
                        <th>Image</th>
                    </tr>
            
                    <tr>
                        <td>1.</td>
                        <td>Rainbow Macaron</td>
                        <td>Rp. 35.000,-</td>
                        <td>3 pcs</td>
                        <td><img src="macaron.jpg" alt="Rainbow Macaron"></td>
                    </tr>
            
                    <tr>
                        <td>2.</td>
                        <td>Tiny Donuts</td>
                        <td>Rp. 30.000,-</td>
                        <td>3 pcs</td>
                        <td><img src="donut.jpg" alt="Tiny Donut"></td>
                    </tr>
            
                    <tr>
                        <td>3.</td>
                        <td>Winny Shortcake</td>
                        <td>Rp. 40.000,-</td>
                        <td>1 slice</td>
                        <td><img src="shortcake.jpg" alt="Winny Shortcake"></td>
                    </tr>

                    <tr>
                        <td>4.</td>
                        <td>Roll Cake</td>
                        <td>Rp. 30.000,-</td>
                        <td>1 serving</td>
                        <td><img src="rollcake.jpg" alt="RollCake"></td>
                    </tr>

                    <tr>
                        <td>5.</td>
                        <td>Mochi Ice Cream</td>
                        <td>Rp. 25.000,-</td>
                        <td>2 pcs</td>
                        <td><img src="mochi.jpg" alt="Mochi Ice Cream"></td>
                    </tr>
                </table>
            </div>
        </fieldset>
    </form>
</body>
</html>