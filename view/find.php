<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/đăng ký.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
</head>
<body>
<?php
    include("navbar.php");
?>
     <div class="col-9">
        <?php 
            include ("../Model/ttsp.php");
            $model = new product();
            
            $count = 0;
            if(isset($_GET['select'])){
                $tukhoa = trim($_GET['select']); 
                $sl = $model->select_find($tukhoa);
                if ($sl->num_rows > 0) {    
        ?>
    <div class="container">
        <div class="row">
        <?php foreach ($sl as $row) { 
            $count++;     
        ?>
            <div class="col-4">
                <a href="chitietsanpham.php?id=<?php echo $row['product_id']; ?>" class="d-flex justify-content-center" style="text-decoration: none;">
                    <div class="card card-hover" style="width:250px; border: 0;">
                        <img class="card-img-top" src="../upload/<?php echo $row['hinhanh']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center text-muted"><?php echo $row['tensp']; ?></h5>
                            <p class="text-center d-block text-muted h6 my-4"><?php echo $row['gia']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php 
        if ($count % 3 == 0) {
            echo '</div><div class="row mt-5">';
        }
        } 
    }
        ?>
        </div>
    </div>
<?php 
} else { // Nếu không có sản phẩm
    if ($lang == "vi") {
        echo "<p class='text-center text-muted'>Không có sản phẩm phù hợp.</p>";
    } else {
        echo "<p class='text-center text-muted'>No matching products found.</p>";
    }
}
?>
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