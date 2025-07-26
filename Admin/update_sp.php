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
        .form-container {
            max-width: 900px;
            width: 100%;
            margin: 40px auto;
            /* Bỏ border, chỉ giữ padding và shadow nhẹ */
            border: none;
            border-radius: 0;
            background: #f9fdf9;
            padding: 32px 32px 24px 32px;
            box-shadow: 0 4px 24px rgba(24,84,59,0.04);
        }
        .form-title {
            text-align: center;
            margin-bottom: 28px;
            color: #28a745;
            font-weight: 600;
        }
        input, textarea, select {
        color: #28a745;
        }
        
    </style>
</head>
<body>
<div class="d-flex">
    <?php include 'navbar.php'; ?>
    <?php
    include("../Model/ttsp.php");
    $id = $_GET['id'];
    $model = new ttsp();
    $ttsp = $model->sl_id_sp($id);
    $ttsp = mysqli_fetch_array($ttsp);
    ?>
    <div class="flex-grow-1 d-flex align-items-center justify-content-center" style="background: #f8f9fa; min-height: 100vh;">
        <div class="form-container">
            <h3 class="form-title"><i class="bi bi-pencil-square"></i> Quản lý sản phẩm</h3>
    <form method="post" action="../Control/admin_update_sp.php" enctype="multipart/form-data" class="form-xanh"style="color: #28a745;">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="tensp" class="form-label">Danh Mục sản phẩm</label>
            <select class="form-control" readonly name="txtdanhmuc" value="<?= $ttsp['danhmuc'] ?>" required>
                <option value="TRÁI CÂY TƯƠI">TRÁI CÂY TƯƠI</option>
                <option value="KẸO">KẸO</option>
                <option value="TẾT CỔ TRUYỀN">TẾT CỔ TRUYỀN</option>
                <option value="TẾT TRUNG THU">TẾT TRUNG THU</option>
                <option value="NGÀY 8/3">NGÀY 8/3</option>
                <option value="NGÀY 1/6">NGÀY 1/6</option>
                <option value="NGÀY 20/11">NGÀY 20/11</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control"  readonly id="tensp" placeholder="Nhập tên sản phẩm" name="txtten" value="<?= $ttsp['tensp'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="gia" class="form-label">Giá</label>
            <input type="number" class="form-control" id="gia" placeholder="Nhập Giá" name="txtgia" value="<?= $ttsp['gia'] ?>" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="ha" class="form-label">Hình Ảnh</label>
            <div class="d-flex align-items-start">
                <input type="file" class="form-control me-3" id="ha" name="txthinhanh" style="max-width: 220px;">
                <?php if (!empty($ttsp['hinhanh'])): ?>
                    <img src="../upload/<?= htmlspecialchars($ttsp['hinhanh']) ?>" alt="Ảnh hiện tại" style="max-width: 80px; max-height: 80px; border:1px solid #ccc; margin-top:2px;">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <input type="hidden" name="id_sp" value="<?= $id ?>">
    <div class="col-md-12 mb-3">
        <label for="mota" class="form-label">Mô tả</label>
        <textarea class="form-control" id="mota" name="txtmota" rows="3"><?= trim($ttsp['mota']) ?></textarea>
    </div>
    <div class="col-md-6 mb-3">
        <label for="tp" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="tp" placeholder="Nhập số lượng" name="txtsoluong" value="<?= $ttsp['soluong'] ?>" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success px-4" name="sub_sp">Cập nhập</button>
    </div>
</form>

        </div>
    </div>
</div>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>