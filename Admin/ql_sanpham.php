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
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <?php include 'navbar.php'; ?>
    <div class="flex-grow-1 p-4" style="background: #f8f9fa;">
        <div class="container">
            <h2 class="mb-4 text-success" style="text-align: center;"><i class="bi bi-people"></i> Quản lý sản phẩm</h2>
            <table class="table table-bordered table-hover align-middle shadow rounded" style="background: #fff;">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
<?php
include("../Model/ttsp.php");
$model = new ttsp();
$ttsp = $model->sl();
foreach($ttsp as $row){
?>
    <tr>
        <td class="text-center fw-bold"><?php echo $row['id']; ?></td>
        <td><?php echo $row['danhmuc']; ?></td>
        <td><?php echo $row['tensp']; ?></td>
        <td><?php echo number_format($row['gia'], 0, ',', '.'); ?>₫</td>
        <td>
            <img src="../upload/<?php echo $row['hinhanh']; ?>" alt="Hình ảnh" style="width:60px; height:60px; object-fit:cover;">
        </td>
        <td><?php echo $row['mota']; ?></td>
        <td><?php echo $row['soluong']; ?></td>
        <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
                <a href="update_sp.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-pencil-square"></i> Sửa
                </a>
                <a href="../Control/delete_sp_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-secondary" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                    <i class="bi bi-trash"></i> Xóa
                </a>
            </div>
        </td>
    </tr>
<?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>