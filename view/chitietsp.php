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

<?php include("navbar.php"); ?>



<?php
include("../Control/themsp.php");
include_once("../Model/ttsp.php");

$ttsp = null;
$relatedProducts = [];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new ttsp();

    $result = $model->get_sp($id);

    if ($result && mysqli_num_rows($result) > 0) {
        $ttsp = mysqli_fetch_assoc($result);
        $relatedProducts = $model->get_sanpham_lienquan($ttsp['danhmuc'], $ttsp['id']);
    } else {
        echo "<p class='text-danger text-center mt-4'>Không tìm thấy sản phẩm.</p>";
        exit;
    }
} else {
    echo "<p class='text-danger text-center mt-4'>Không có sản phẩm được chọn.</p>";
    exit;
}
?>

<div class="container py-5">
    <div class="row align-items-start">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-lg-6 mb-4">
            <div class="border rounded shadow-sm p-3">
                <img src="../upload/<?php echo $ttsp['hinhanh']; ?>" class="img-fluid rounded" alt="Hình ảnh sản phẩm">
            </div>
        </div>

        <!-- Thông tin sản phẩm -->
        <div class="col-lg-6">
            <h2 class="card-text text-uppercase font-weight-bold text-center" style="font-weight: 600; text-transform: uppercase; text-align: center; min-height: 50px;"><?php echo $ttsp['tensp']; ?></h2>
            <p class="fs-4 text-danger mb-1">
                <?php echo number_format($ttsp['gia'], 0, ',', '.'); ?>đ
                <del class="text-muted fs-5 ms-2"><?php echo number_format($ttsp['gia'] * 1.1, 0, ',', '.'); ?>đ</del>
            </p>
            <p class="mb-3">Số lượng còn: <strong><?php echo $ttsp['soluong']; ?></strong></p>

            <form action="../control/add_cart.php" method="post" class="mb-4">
                <input type="hidden" name="id_pro" value="<?php echo $ttsp['id']; ?>">
                <div class="mb-3 d-flex align-items-center gap-3">
                    <label for="qty" class="mb-0">Số lượng:</label>
                    <input type="number" id="qty" name="soluong" value="1" min="1" class="form-control w-25">
                </div>
                <div class="d-flex gap-3">
                    <button type="submit" name="subthem" value="add" class="btn btn-outline-success px-4">
                        ➕ Thêm vào giỏ hàng
                    </button>
                    
                </div>
            </form>

            <div class="bg-light p-3 rounded">
                <span class="badge bg-success mb-2">Giao hàng hoả tốc</span><br>
                <small class="text-muted">Trong 30 phút tại Hà Nội – Vui lòng đặt trước 2 tiếng</small>
            </div>
        </div>
    </div>

    <!-- Mô tả sản phẩm -->
    <div class="mt-5">
        <h4 class="text-uppercase border-bottom pb-2 mb-3">Mô tả sản phẩm</h4>
        <p class="text-secondary"><?php echo nl2br($ttsp['mota']); ?></p>
    </div>

    <!-- Sản phẩm liên quan -->
    <div class="mt-5">
        <h4 class="text-uppercase border-bottom pb-2 mb-3">Sản phẩm liên quan</h4>
        <div class="row">
            <?php foreach ($relatedProducts as $row): ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="../upload/<?php echo $row['hinhanh']; ?>" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title"><?php echo $row['tensp']; ?></h6>
                        <p class="text-danger mb-2"><?php echo number_format($row['gia'], 0, ',', '.'); ?>đ</p>
                        <a href="chitietsp.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm mt-auto">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Footer -->
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
