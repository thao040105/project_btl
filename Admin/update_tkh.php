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
    <?php
    $id = $_GET['id'];
    include("../Model/user.php");
    $model = new user();
    $user = $model->sl_id_user($id);
    $user = mysqli_fetch_array($user);
    ?>
    <div class="flex-grow-1 p-4" style="background: #f8f9fa;">
        <div class="container" >
       <form method="post" action="../Control/admin_update_tk.php" class="registration-form">
            <h2 class="mb-4 text-success" style="text-align: center;"><i class="bi bi-people"></i> Quản lý tài khoản</h2>
            <div class="mb-3">
                <label for="fullname" class="form-label text-success">Tên Đăng Nhập:</label>
                <input type="text" id="fullname" readonly name="txttendangnhap" class="form-control" value="<?= $user['username'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-success">Email:</label>
                <input type="email" id="email" name="txtemail" class="form-control"  value="<?= $user['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-success">Mật khẩu:</label>
                <input type="text" id="password" name="txtpass" value="<?= $user['pass'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
            <div class="text-center">
                <button type="submit" name="sub_update" class="btn btn-success">Cập nhật</button>
            </div>
        </form>

        </div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>