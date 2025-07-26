<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="css/đăng ký.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
    
</head>
<body>
<div style="background-color: mintcream;">
<?php 
$user_identify = isset($_SESSION['username']) ? $_SESSION['username'] : session_id();
include("navbar.php"); 
include("../Model/ttsp.php");



$cart = new cart();
$ttsp = new ttsp();
$sl_cart = $cart->get_cart($user_identify);
$tong_tien = 0;
?>
    <div class="container mt-5 mb-5">
  <div class="card shadow-lg rounded-4 p-4" style="max-width: 800px; margin: auto; border: 1px solid #dee2e6;">
    <h3 class="text-center mb-4" style="color:rgb(24, 84, 59); font-size: 30px;">Phiếu Thanh Toán</h3>

    <form action="../Control/orders_xuly.php" method="post">

      <!-- Thông tin liên lạc -->
      <div class="mb-4">
        <h5 style="color: #18543b;">Thông tin liên lạc</h5>
        <input type="text" class="form-control" name="mail" placeholder="Email hoặc số điện thoại" required>
      </div>

      <!-- Giao hàng -->
      <div class="mb-4">
        <h5 style="color: #18543b;">Cửa hàng</h5>
      

        <div class="">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cuahang" value="Hà Đông">
            <label class="form-check-label">VITAMIN HOUSE - 340 Quang Trung, Hà Đông</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cuahang" value="Đống Đa">
            <label class="form-check-label">VITAMIN HOUSE - 343 Ô Chợ Dừa, Đống Đa</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cuahang" value="Gò Vấp" checked>
            <label class="form-check-label">VITAMIN HOUSE - 27A Phan Văn Trị, Gò Vấp</label>
          </div>
        </div>
      </div>

      <!-- Phương thức thanh toán -->
      <div class="mb-4">
        <h5 style="color: #18543b;">Phương thức thanh toán</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="cod" name="pththanhtoan" value="cod" checked>
          <label class="form-check-label" for="cod">COD (Thanh toán khi nhận hàng)</label>
        </div>
      </div>

      <!-- Địa chỉ người nhận -->
      <div class="mb-4">
        <h5 style="color: #18543b;">Địa chỉ người nhận</h5>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" class="form-control" name="hoten" placeholder="Họ và tên" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" required>
          </div>
          <div class="col-md-12">
            <input type="text" class="form-control" name="diachi" placeholder="Địa chị" required>
          </div>
        </div>
      </div>

      <!-- Nút hoàn tất -->
      <div class="text-center mt-4">
        <button type="submit" name="subthanhtoan"class="btn btn-success px-5 py-2 rounded-pill" style="background-color: rgb(24, 84, 59); border: none;">
          Hoàn tất đặt hàng
        </button>
      </div>
    </form>
  </div>
</div>




<hr style="width:100%;">
    <div class="container nen2 mt-5" style="width:100%; height:600px;background-color: mintcream;">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12">
                <h4 style="color:rgb(126, 126, 130)">THÔNG TIN CHUNG</h4>
                <p style="color:rgb(126, 126, 130)">Sứ mạng, Tầm nhìn, Giá trị cốt lõi</p>
                <p style="color:rgb(126, 126, 130)">Review Từ Khách Hàng</p>
                <p style="color:rgb(126, 126, 130)">Liên hệ</p>
                <p style="color:rgb(126, 126, 130)">Tuyển Dụng</p>
                <p style="color:rgb(126, 126, 130)">Blog Vitamin</p>
                <p style="color:rgb(126, 126, 130)">Thanh toán</p>
                <p style="color:rgb(126, 126, 130)">Chính sách thanh toán</p>
                <p style="color:rgb(126, 126, 130)">Chính sách giao nhận</p>
                <p style="color:rgb(126, 126, 130)">Chính sách đổi trả</p>
                <p style="color:rgb(126, 126, 130)">Chính sách tích điểm</p>
                <p style="color:rgb(126, 126, 130)">Điều khoản dịch vụ</p>
                <p style="color:rgb(126, 126, 130)">Chính sách đổi trả hàng</p>
                <p style="color:rgb(126, 126, 130)">Chính sách bảo mật</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 style="color: rgb(126, 126, 130);">VỀ CHÚNG TÔI</h4>
                <img src="media/anh20.png" alt="to" width="170px" height="120px">
                <p style="color:rgb(126, 126, 130)">Thương hiệu trực thuộc:</p>
                <p style="color:rgb(126, 126, 130)">Công ty TNHH TM-DV VTMH</p>
                <p style="color:rgb(126, 126, 130)">Địa chỉ : Tòa Nhà Viettel Complex, 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh</p>
                <p style="color:rgb(126, 126, 130)">VITAMIN HOUSE - SẢN PHẨM QUỐC TẾ CHO NGƯỜI VIỆT</p>
                <p style="color:rgb(126, 126, 130)">Hotline: 096 135 6668
                    <ul>
                        <li style="color: rgb(126, 126, 130)">563 CMT8, P15, Q10 - 0933 08 1589</li>
                        <li style="color: rgb(126, 126, 130)">219A Phạm Viết Chánh, P.Nguyễn Cư Trinh, Q.1 - 0909 68 1356</li>
                        <li style="color: rgb(126, 126, 130)">330 Quang Trung, P10, Q.Gò Vấp - 093 889 1259</li>
                        <li style="color: rgb(126, 126, 130)">Bán sỉ: 096 186 4789</li>
                        <li style="color: rgb(126, 126, 130)">Quà Doanh Nghiệp: 09788 13568</li>
                    </ul>
                </p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 style="color:rgb(126, 126, 130);">BẢN TIN</h4>
                <p style="color:rgb(126, 126, 130)">Đăng ký để không bỏ lỡ thông tin hoặc</p>
                <p style="color:rgb(126, 126, 130)">chương trình khuyến mãi hấp dẫn</p>
                <input type="email" id="email" name="email" placeholder="Nhập địa chỉ Email" required style="padding: 8px; margin-bottom: 10px; width:50%;"><br>
                <button type="submit" class="submit-btn" style="padding: 8px 20px; background-color: rgb(53, 124, 61); color: white; border: none;">Đăng Ký</button><br>
                <img src="media/anh8.png" alt="to" width="170px" height="80px">
            </div>
        </div>
    </div>
    </div>   
    </body>
    </html>