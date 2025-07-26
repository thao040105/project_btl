<?php
session_start();
include "../Model/orders.php";
include("../Model/ttsp.php");
include("../Model/cart.php");
$user_identify = isset($_SESSION['username']) ? $_SESSION['username'] : session_id();
if(isset($_POST['subthanhtoan'])){
    if(empty($_POST['mail']) || empty($_POST['cuahang']) || empty($_POST['hoten']) || empty($_POST['sdt']) || empty($_POST['diachi'])){
        echo "<script>
            alert('Vui lòng nhập đủ thông tin');
            window.location.href = '../View/thanhtoan.php';
        </script>"; 
    }
    else{
        $model = new orders();
        $cart = new cart();
        $product = new ttsp();
        $tong_tien = 0;
        $sl_cart = $cart->sl_cart_user($user_identify);
        foreach ($sl_cart as $row) {
            $sp = $product->get_sp($row['id_pro']);
            $sp = $sp->fetch_assoc();
            $tong_sp = $sp['gia'] * $row['soluong'];
            $tong_tien += $tong_sp;
        }
        $insert = $model->insert_order($user_identify,$_POST['hoten'],$_POST['sdt'],$_POST['diachi'],$_POST['cuahang'],$_POST['mail'],$tong_tien);
        $update = $cart->set_id_donhang($user_identify, $model->sl_id_donhang());
        $_SESSION['cart_count'] = $cart->sl_sl($user_identify);
        if($insert){
            echo "<script>
            alert('Thanh toán thành công');
            window.location.href = '../View/thanhtoan.php';
            </script>";             
        }


        
    }



}
?>