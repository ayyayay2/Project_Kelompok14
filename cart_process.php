<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    // Kalau produk sudah ada di cart, tambahkan jumlahnya
    if (isset($_SESSION['cart'][$produk])) {
        $_SESSION['cart'][$produk]['jumlah'] += $jumlah;
    } else {
        $_SESSION['cart'][$produk] = [
            'produk' => $produk,
            'harga' => $harga,
            'jumlah' => $jumlah
        ];
    }

    // Redirect balik ke order.php
    header('Location: order.php');
    exit();
}
?>
