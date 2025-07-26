<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/liên hệ mua sỉ.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
    $product = new ttsp();

    $sl_cart = $cart->sl_cart_user($user_identify );
?>
<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Sản phẩm</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-end">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tong_tien = 0;
                        foreach ($sl_cart as $row) {
                            $sp = $product->get_sp($row['id_pro']);
                            $sp = $sp->fetch_assoc();
                            $tong_sp = $sp['gia'] * $row['soluong'];
                            $tong_tien += $tong_sp;
                        ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../upload/<?php echo $sp['hinhanh']; ?>" alt="SP1" class="img-thumbnail me-3" style="width: 100px;">
                                    <div>
                                        <div class="fw-bold"><?php echo $sp['tensp']; ?></div>
                                        <div class="text-success fw-bold" style="font-size: 16px;"><?php echo number_format($sp['gia']); ?>₫</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <form action="../Control/update_cart.php" method="post" class="d-flex justify-content-center align-items-center">
                                    <input type="hidden" name="id_pro" value="<?php echo $row['id_pro']; ?>">
                                    <button type="submit" name="action" value="decrease" class="btn btn-outline-secondary btn-sm me-2">−</button>
                                    <input type="text" name="soluong" value="<?php echo $row['soluong']; ?>" class="form-control text-center w-25" readonly>
                                    <button type="submit" name="action" value="increase" class="btn btn-outline-secondary btn-sm ms-2">+</button>
                                </form>
                                <form action="../Control/delete_cart.php" method="post" class="mt-2">
                                    <input type="hidden" name="id_pro" value="<?php echo $row['id_pro']; ?>">
                                    <button type="submit" class="btn btn-link text-danger small" onclick="return confirm('Xóa sản phẩm này?')">Loại bỏ</button>
                                </form>

                            </td>
                            <td class="text-end fw-bold"><?php echo number_format($tong_sp); ?>₫</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-end fw-bold">Tổng cộng:</td>
                            <td class="text-end fw-bold text-danger"><?php echo number_format($tong_tien); ?>₫</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end">
                                <a href="thanhtoan.php" class="btn btn-success px-4">Thanh toán</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
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