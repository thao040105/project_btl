<?php
session_start();
$user_identify = isset($_SESSION['username']) ? $_SESSION['username'] : session_id();
include("../Model/cart.php");
$sl_sl = new cart();
$cart_count = $sl_sl->sl_sl($user_identify );
$_SESSION['cart_count'] = $cart_count;
?>
<form action="thanhtimkiem.php" method="GET">
<div class="container-fluid" style="background-color: rgb(24, 84, 59);height: 80px; padding-bottom: 20px;height: 110px;">
        <div class="row">
            <div class="col-2">
               <a href="tranglogo.php"><img src="Media/logo.png" width="80px" style="margin-top: 17px; margin-left: 120px;"></a> 
            </div>
            
            <div class="col-6">
                <div class="input-group" style="margin-top: 20px;">
                    <input  type="text" class="form-control" name="keyword" placeholder="Tìm sản phẩm...">
                    <button class="btn btn-success" type="submit" name="txttimkiem">TÌM KIẾM</button>
                </div>
            </div>
            </form>
            <?php
if (isset($_SESSION['username'])) {
    $username = htmlspecialchars($_SESSION['username']); 
    echo '
    <div class="col-2 mt-3" style="z-index: 1050; position: relative;">
        <div class="dropdown" style="margin-top: 10px;">
            <a class="dropdown-toggle text-white" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; font-weight: 600;">
                Xin chào <span style="font-weight: bold;">' . $username . '</span>
            </a>
            <ul class="dropdown-menu" style="z-index: 1050;" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="donhang.php">Quản lý đơn hàng</a></li>
                <li><a class="dropdown-item" href="../Control/logout.php">Đăng xuất</a></li>
            </ul>
        </div>
    </div>';
} else {
    echo '
    <div class="col-2 mt-4" style="z-index: 1050; position: relative;">
        <div class="dropdown">
            <a class="dropdown-toggle text-white" href="#" role="button" id="guestDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; font-weight: 600;">
                Tài khoản
            </a>
            <ul class="dropdown-menu" style="z-index: 1050;" aria-labelledby="guestDropdown">
                <li><a class="dropdown-item" href="dangnhap.php">Đăng nhập</a></li>
                <li><a class="dropdown-item" href="dangky.php">Đăng ký</a></li>
            </ul>
        </div>
    </div>';
}
?>

            <div class="col-2" style="margin-top: 24px; margin-left: -50px; ">
                <span id="cart-count">
                    <?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?>
                </span>
                <a href="cart.php" style="font-size: 18px; color: aliceblue; text-decoration: none; font-weight: 600;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-cart2"></i> GIỎ HÀNG </a>
            </div>
        </div>
    </div>

    <nav class="custom-navbar">
        <ul class="custom-nav">
            <li style="margin-left: 120px;" ><a href="#">DANH MỤC SẢN PHẨM <i class="fa fa-chevron-down"></i></a>
                <ul class="custom-dropdown">
                    <li><a href="traicaytest.php">TRÁI CÂY TƯƠI</a></li>
                    <li><a href="trangchu.php">BÁNH</a></li>
                    <li><a href="keotest.php">KẸO</a></li>
                </ul>
            </li>
            <li style="margin-left: 40px;"><a href="gioithieu.php">GIỚI THIỆU</a></li>
            <li style="margin-left: 40px;"><a href="life.php">LIFE STYLE  <i class="fa fa-chevron-down"></i></a>
                <ul class="custom-dropdown">
                    <li><a href="tettest.php">TẾT CỔ TRUYỀN</a></li>
                    <li><a href="tettrungthutest.php">TẾT TRUNG THU</a></li>
                    <li><a href="ngay8_3test.php">NGÀY 8/3</a></li>
                    <li><a href="ngay1_6test.php">NGÀY 1/6</a></li>
                    <li><a href="ngay20_11test.php">NGÀY 20/11</a></li>
                </ul>
            </li>
            <li style="margin-left: 40px;"><a href="thongtin .php">THÔNG TIN HỆ THỐNG</a></li>
            <li style="margin-left: 40px;"><a href="nhacungcap.php">NHÀ CUNG CẤP</a></li>
            <li style="margin-left: 40px;"><a href="lienhe.php">LIÊN HỆ MUA SỈ</a></li>
        </ul>
    </nav>

    