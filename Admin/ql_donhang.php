<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý đơn hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <style>
    /* Style cho bảng table (giữ nguyên, không đổi) */
    .table thead th {
        background-color: #f1f1f1;
        color: rgb(24, 84, 59);
    }

    .table tbody td {
        color: rgb(24, 84, 59);
    }

    .btn-outline-secondary {
        border-color: rgb(24, 84, 59);
        color: rgb(24, 84, 59);
    }

    .btn-outline-secondary:hover {
        background-color: rgb(24, 84, 59);
        color: #fff;
    }

    /* Dropdown trạng thái */
    .dropdown-status {
        position: relative;
        display: inline-block;
        cursor: pointer;
        color: rgb(24, 84, 59);
    }

    .dropdown-menu-status {
        display: none;
        position: absolute;
        background: #fff;
        border: 1px solid #ccc;
        z-index: 10;
        min-width: 160px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }

    .dropdown-status:hover .dropdown-menu-status {
        display: block;
    }

    .dropdown-menu-status div {
        padding: 8px 12px;
        cursor: pointer;
        color: rgb(24, 84, 59);
    }

    .dropdown-menu-status div:hover {
        background-color: #f0f0f0;
    }

    /* Sidebar tùy chỉnh dựa vào vị trí */
    .d-flex > div:first-child {
        background-color: #1d5741;
        color: white;
        height: 100vh;
        padding: 20px;
    }

    .d-flex > div:first-child .nav-link {
        color: white;
        font-weight: 500;
    }

    .d-flex > div:first-child .nav-link:hover {
        background-color: #164d36;
        color: white;
    }

    .d-flex > div:first-child .nav-link i {
        margin-right: 8px;
    }

    .d-flex > div:first-child .collapse {
        padding-left: 20px;
    }

    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
</style>

</head>
<body>
<div class="d-flex">
    <?php include 'navbar.php'; ?>
    <div class="flex-grow-1 p-4" style="background: #f8f9fa;">
        <div class="container">
            <h2 class="mb-4 text-success text-center"><i class="bi bi-box"></i> Quản lý đơn hàng</h2>
            <table class="table table-bordered table-hover align-middle shadow rounded" style="background: #fff;">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Tài khoản</th>
                        <th>Họ tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Cửa hàng</th>
                        <th>Thời gian đặt</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết đơn hàng</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include("../Model/orders.php");
                    $model = new orders();
                    $order = $model->sl_all();
                    foreach($order as $row): ?>
                    <tr>
                        <td class="text-center fw-bold"><?= $row['user_name']; ?></td>
                        <td><?= $row['hoten']; ?></td>
                        <td><?= $row['diachi']; ?></td>
                        <td><?= $row['sdt']; ?></td>
                        <td><?= $row['cuahang']; ?></td>
                        <td><?= $row['ngaydat']; ?></td>
                        <td>
                            <div class="dropdown-status">
                                <span id="trangthai-label-<?= $row['id_donhang']; ?>">
                                    <?= !empty($row['trangthai']) ? $row['trangthai'] : 'Chờ xác nhận'; ?>
                                </span>
                                <div class="dropdown-menu-status">
                                    <div onclick="updateTrangThai(<?= $row['id_donhang']; ?>, 'Chờ xác nhận')">Chờ xác nhận</div>
                                    <div onclick="updateTrangThai(<?= $row['id_donhang']; ?>, 'Đang vận chuyển')">Đang vận chuyển</div>
                                    <div onclick="updateTrangThai(<?= $row['id_donhang']; ?>, 'Hoàn thành')">Hoàn thành</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="chitietdonhang.php?id=<?= $row['id_donhang']; ?>" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i> Xem chi tiết
                            </a>
                        </td>
                        <td class="text-center" id="hanhdong-<?= $row['id_donhang']; ?>">
                            <?php
                                $trangthai = !empty($row['trangthai']) ? $row['trangthai'] : 'Chờ xác nhận';
                                if ($trangthai == 'Chờ xác nhận') {
                                    echo '<span class="text-warning">Đợi xác nhận</span>';
                                } elseif ($trangthai == 'Đang vận chuyển') {
                                    echo '<span class="text-info">Đã xác nhận</span>';
                                } elseif ($trangthai == 'Hoàn thành') {
                                    echo '<span class="text-success">Đã giao hàng</span>';
                                }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- JavaScript xử lý cập nhật trạng thái -->
<script>
function updateTrangThai(id, trangthai) {
    fetch('../Control/update_trangthai.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id_donhang=' + id + '&trangthai=' + encodeURIComponent(trangthai)
    })
    .then(response => response.text())
    .then(data => {
        // Cập nhật hiển thị trạng thái và hành động
        document.getElementById('trangthai-label-' + id).textContent = trangthai;

        const actionCell = document.getElementById('hanhdong-' + id);
        if (trangthai === 'Chờ xác nhận') {
            actionCell.innerHTML = '<span class="text-warning">Đợi xác nhận</span>';
        } else if (trangthai === 'Đang vận chuyển') {
            actionCell.innerHTML = '<span class="text-info">Đã xác nhận</span>';
        } else if (trangthai === 'Hoàn thành') {
            actionCell.innerHTML = '<span class="text-success">Đã giao hàng</span>';
        }
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>