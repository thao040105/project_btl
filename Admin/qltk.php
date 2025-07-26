<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý tài khoản</title>
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
            <h2 class="mb-4 text-success" style="text-align: center;"><i class="bi bi-people"></i> Quản lý tài khoản</h2>
            <table class="table table-bordered table-hover align-middle shadow rounded" style="background: #fff;">
                <thead class="table-light">
    <tr>
        <th class="text-center">ID</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th class="text-center">Hành động</th>
    </tr>
</thead>
<tbody>
<?php
include("../Model/user.php");
$model = new user();
$user = $model->sl();
foreach($user as $row){
?>
    <tr>
        <td class="text-center fw-bold"><?php echo $row['id_user']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['pass']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td class="text-center">
            <a href="update_tkh.php?id=<?php echo $row['id_user']; ?>" class="btn btn-sm btn-outline-secondary me-2">
                <i class="bi bi-pencil-square"></i> Sửa
            </a>
            <a href="../Control/delete_tkh.php?id=<?php echo $row['id_user']; ?>" class="btn btn-sm btn-outline-secondary" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này?')">
                <i class="bi bi-trash"></i> Xóa
            </a>
        </td>
    </tr>
<?php } ?>
</tbody>

            </table>
            <a href="themtaikhoan.php" class="btn btn-success mt-3" ><i class="bi bi-person-plus"></i> Thêm tài khoản mới</a>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>