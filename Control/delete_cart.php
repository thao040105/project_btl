<?php
session_start();
include("../Model/cart.php");
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Vui lòng đăng nhập để thực hiện hành động này!');</script>";
    echo "<script>window.location='../View/dangnhap.php';</script>";
    exit;
}

if (isset($_POST['id_pro'])) {
    $cart = new cart();
    $id_pro = intval($_POST['id_pro']);
    $cart->remove_cart($_SESSION['username'], $id_pro);
}

echo "<script>window.location='../View/cart.php';</script>";
?>