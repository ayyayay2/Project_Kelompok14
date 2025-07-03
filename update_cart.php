<?php
session_start();

if (isset($_POST['produk']) && isset($_POST['jumlah'])) {
    $produk = $_POST['produk'];
    $jumlah = intval($_POST['jumlah']);

    if ($jumlah < 1) {
        // Kalau jumlah kurang dari 1, hapus aja item-nya
        unset($_SESSION['cart'][$produk]);
    } else {
        // Update jumlah di keranjang
        if (isset($_SESSION['cart'][$produk])) {
            $_SESSION['cart'][$produk]['jumlah'] = $jumlah;
        }
    }
}

header("Location: cart_view.php");
exit();
