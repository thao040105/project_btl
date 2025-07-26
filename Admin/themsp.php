<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin Sidebar Fixed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/admin.css">
    <style>
    .table thead th {
    background-color: #f1f1f1;
    color: rgb(24, 84, 59);;
    }

    .table tbody td {
        color: rgb(24, 84, 59);;
    }

    .btn-outline-secondary {
        border-color:rgb(24, 84, 59);;
        color:rgb(24, 84, 59);;
    }

    .btn-outline-secondary:hover {
        background-color: rgb(24, 84, 59);;
        color: #fff;
    }
    table td, table th {
    color: #198754; /* Màu xanh lá Bootstrap (btn-success) */
}
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <?php include 'navbar.php'; ?>

    <div class="flex-grow-1 p-4" style="background: #f8f9fa;">
        <div class="container-fluid">
            <h3 style="text-align: center; margin-top: 20px; color: #28a745;">Thêm sản phẩm</h3>

            <form method="post" action="../Control/themsp.php" enctype="multipart/form-data" style="color: #28a745;">
                <label for="tensp" class="form-label mt-3">Danh Mục sản phẩm</label>
                <select class="form-control" name="txtdanhmuc">
                    <option value="TRÁI CÂY TƯƠI">TRÁI CÂY TƯƠI</option>
                    <option value="KẸO">KẸO</option>
                    <option value="TẾT CỔ TRUYỀN">TẾT CỔ TRUYỀN</option>
                    <option value="TẾT TRUNG THU">TẾT TRUNG THU</option>
                    <option value="NGÀY 8/3">NGÀY 8/3</option>
                    <option value="NGÀY 1/6">NGÀY 1/6</option>
                    <option value="NGÀY 20/11">NGÀY 20/11</option>
                </select>

                <div class="mb-3 mt-3">
                    <label for="tensp" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="tensp" placeholder="Nhập tên sản phẩm" name="txtten">
                </div>

                <div class="mb-3 mt-3">
                    <label for="gia" class="form-label">Giá</label>
                    <input type="number" class="form-control" id="gia" placeholder="Nhập Giá" name="txtgia">
                </div>

                <div class="mb-3 mt-3">
                    <label for="ha" class="form-label">Hình Ảnh</label>
                    <input type="file" class="form-control" id="ha" name="txthinhanh">
                </div>

                <div class="mb-3 mt-3">
                    <label for="mota" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="mota" name="txtmota"></textarea>
                </div>

                <div class="mb-3 mt-3">
                    <label for="tp" class="form-label">Số lượng</label>
                    <input type="number" class="form-control" id="tp" placeholder="Nhập số lượng" name="txtsoluong">
                </div>

                <button type="submit" class="btn btn-success" name="txtsub" style="display: block; margin: 30px auto 0;">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>