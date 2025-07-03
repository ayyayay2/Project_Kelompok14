<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart - Petite Pantry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center; color:palevioletred;">🛒 Isi Keranjang Kamu</h2>

<div style="width: 80%; margin: auto; background: #fff0f5; padding: 20px; border-radius: 15px;">
<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $grandTotal = 0;

    foreach ($_SESSION['cart'] as $index => $item) {
        $subtotal = $item['harga'] * $item['jumlah'];
        $grandTotal += $subtotal;
        ?>

        <div style="border-bottom: 1px dashed pink; margin-bottom: 15px; padding-bottom: 10px;">
            <h3><?= $item['produk'] ?></h3>
            <p>Harga: Rp <?= number_format($item['harga']) ?></p>
            <p>Jumlah: <?= $item['jumlah'] ?></p>
            <p>Total: Rp <?= number_format($subtotal) ?></p>

            <!-- Update jumlah -->
            <form method="post" action="update_cart.php" style="display:inline-block;">
                <input type="hidden" name="produk" value="<?= $item['produk'] ?>">
                <input type="number" name="jumlah" value="<?= $item['jumlah'] ?>" min="1">
                <input type="submit" value="Update">
            </form>

            <!-- Hapus item -->
            <form method="post" action="delete_cart.php" style="display:inline-block;">
                <input type="hidden" name="produk" value="<?= $item['produk'] ?>">
                <input type="submit" value="Hapus" style="background-color: palevioletred; color: white;">
            </form>
        </div>

        <?php
    }

    echo "<h3>Total Belanja: Rp " . number_format($grandTotal) . "</h3>";

} else {
    echo "<p>Keranjang kamu masih kosong 🍩</p>";
}
?>
</div>

<div style="text-align:center; margin-top: 20px;">
    <a href="order.php"><button style="padding: 10px 20px; border-radius: 20px;">⬅️ Kembali Belanja</button></a>
</div>

</body>
</html>

