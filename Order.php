<?php
include 'koneksi.php';
session_start();
$produk = [];

if (isset($_GET['keyword'])) {
    $keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'");
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM produk");
}

while ($row = mysqli_fetch_assoc($query)) {
    $produk[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Petite Pantry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">🍰 Petite Pantry</div>
    <ul class="nav-links">
        <li><a href="main.php">Home</a></li>
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="pesan.php">Contact</a></li>
        <li><a href="aboutus.php">About</a></li>
    </ul>
</nav>

<div class="shop-header">
    <h1>🌸 PETITE PANTRY 🌸</h1>
    <form method="get" action="order.php" style="text-align:center; margin-bottom: 20px;">
    <input type="text" name="keyword" placeholder="Cari dessert favoritmu..." style="padding: 8px; width: 250px;">
    <input type="submit" value="Cari" style="padding: 8px;">
</form>
</div>

<div class="product-grid">
    <?php if (count($produk) > 0): ?>
        <?php foreach ($produk as $row): ?>
            <form method="post" action="cart_process.php">
                <div class="product-card">
                    <img src="<?= $row['gambar'] ?>" alt="<?= $row['nama_produk'] ?>">
                    <div class="product-info">
                        <h3><?= htmlspecialchars($row['nama_produk']) ?></h3>
                        <p class="price">Rp <?= number_format($row['harga']) ?></p>
                        <input type="hidden" name="produk" value="<?= $row['nama_produk'] ?>">
                        <input type="hidden" name="harga" value="<?= $row['harga'] ?>">
                        <input type="number" name="jumlah" min="0" value="0">
                        <input type="submit" name="add_to_cart" value="Add to Cart">
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
        <p style="text-align: center;">Produk tidak ditemukan 😢</p>
    <?php endif; ?>
</div>

</div>

<?php
$total = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['jumlah'];
    }
}
?>
<div style="position: fixed; bottom: 20px; right: 20px;">
    <a href="cart_view.php">
        <input type="button" value="🛒 Cart (<?= $total ?>)" style="border-radius: 20px; padding: 10px 20px;">
    </a>
</div>

</body>
</html>

