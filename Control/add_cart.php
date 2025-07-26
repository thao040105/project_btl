<?php
session_start();
include("../Model/cart.php");
$user_identify = isset($_SESSION['username']) ? $_SESSION['username'] : session_id();
if(isset($_POST['subthem'])){
    $model = new cart();
    $sl_giohang = $model->sl_cart($user_identify,$_POST['id_pro']);
    if($sl_giohang->num_rows > 0){
        $model->update_cart($user_identify,$_POST['soluong'],$_POST['id_pro']);
    }
    else{
        $model->insert_cart($user_identify,$_POST['soluong'],$_POST['id_pro']);
    }
    echo "<script>alert('thêm vào giỏ hàng thành công!')</script>";
    echo "<script>window.location='../View/chitietsp.php?id=" . $_POST['id_pro'] . "';</script>";
    $_SESSION['cart_count'] = $model->sl_sl($user_identify);
}
header("Location: ../View/cart.php");
exit;
?>