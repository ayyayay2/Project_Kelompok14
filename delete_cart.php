<?php
session_start();

if (isset($_POST['produk'])) {
    $produk = $_POST['produk'];

    // Cek dan hapus produk dari session
    if (isset($_SESSION['cart'][$produk])) {
        unset($_SESSION['cart'][$produk]);
    }
}

header("Location: cart_view.php");
exit();
