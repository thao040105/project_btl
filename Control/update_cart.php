<?php
session_start();
include("../Model/cart.php");
$user_identify = isset($_SESSION['username']) ? $_SESSION['username'] : session_id();


if (isset($_POST['id_pro']) && isset($_POST['action'])) {
    $cart = new cart();
    $id_pro = intval($_POST['id_pro']);
    $action = $_POST['action'];

    $sl_cart = $cart->sl_cart($user_identify, $id_pro);
    if ($sl_cart->num_rows > 0) {
        $row = $sl_cart->fetch_assoc();
        $soluong = $row['soluong'];

        if ($action == "increase") {
            $soluong++;
        } elseif ($action == "decrease" && $soluong > 1) {
            $soluong--;
        }

        $cart->update_cart($user_identify, $soluong, $id_pro);
    }
}

echo "<script>window.location='../View/cart.php';</script>";
?>