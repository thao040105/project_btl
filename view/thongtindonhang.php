<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/đăng ký.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
</head>
<body>
<?php
include("navbar.php");
include("../Model/ttsp.php");
include("../Model/orders.php");

$user = $_SESSION['username']; // giả sử user đã đăng nhập

$model = new orders();
$donhangs = $model->layDonHangTheoUser($user);

if ($donhangs && count($donhangs) > 0){
    foreach ($donhangs as $donhang){
        echo "<div class='container border p-3 mb-4'>";
        echo "<h4>Đơn hàng #{$donhang['id_donhang']} - Ngày đặt: {$donhang['ngaydat']}</h4>";
        echo "<p><strong>Người nhận:</strong> {$donhang['hoten']}</p>";
        echo "<p><strong>SĐT:</strong> {$donhang['sdt']} - <strong>Email:</strong> {$donhang['email']}</p>";
        echo "<p><strong>Địa chỉ:</strong> {$donhang['diachi']}</p>";
        echo "<p><strong>Cửa hàng:</strong> {$donhang['cuahang']}</p>";

        $chitiet = $model->layChiTietDonHang($donhang['id_donhang']);

        if ($chitiet && count($chitiet) > 0) {
            echo "<table class='table table-bordered'><tr><th>Hình ảnh</th><th>Tên sản phẩm</th><th>Giá</th><th>Số lượng</th><th>Tổng</th></tr>";
            $tong = 0;
            foreach ($chitiet as $sp) {
                $thanhtien = $sp['gia'] * $sp['soluong'];
                $tong += $thanhtien;
                echo "<tr>
                        <td><img src='../upload/{$sp['hinhanh']}' width='60'></td>
                        <td>{$sp['tensp']}</td>
                        <td>" . number_format($sp['gia']) . " VND</td>
                        <td>{$sp['soluong']}</td>
                        <td>" . number_format($thanhtien) . " VND</td>
                      </tr>";
            }
            echo "<tr><td colspan='4' class='text-end'><strong>Tổng cộng:</strong></td><td><strong>" . number_format($tong) . " VND</strong></td></tr>";
            echo "</table>";
        } else {
            echo "<p>Không có sản phẩm nào trong đơn hàng này.</p>";
        }

        echo "</div>";
    }
} else {
    echo "<p>Bạn chưa có đơn hàng nào.</p>";
}
?>







<hr style="width:100%;">
    <div class="container nen2 mt-5" style="width:100%; height:600px; background-color: mintcream;">
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
</body>
</html>
