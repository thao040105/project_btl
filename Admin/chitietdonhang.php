<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý đơn hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/admin.css">
    <style>
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
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <?php include 'navbar.php'; ?>
<!-- Giao diện chi tiết đơn hàng với màu xanh lá chủ đạo -->
<div class="container my-4">
    <div class="card shadow rounded">
        <div class="card-header text-white text-center fw-bold" style="background: #18643b;">
            THÔNG TIN CHI TIẾT ĐƠN HÀNG
        </div>
        <div class="card-body p-0">
            <table class="table mb-0" style="background: #f8f9fa;">
                <thead style="background: #18643b;">
                    <tr class="text-white text-center">
                        <th>HÌNH ẢNH</th>
                        <th>TÊN SP</th>
                        <th>ĐƠN GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>THÀNH TIỀN</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SĐT</th>
                        <th>CỬA HÀNG</th>
                        <th>THỜI GIAN</th>
                    </tr>
                </thead>
                <?php
                include("../Model/orders.php");
                $model = new orders();
                $id_donhang = $_GET['id'];
                $order = $model->chitietdonhang($id_donhang);

                ?>
                <tbody>
                     <?php 
                        $tong = 0;
                        foreach ($order as $row) { 
                            $thanhtien = $row['gia'] * $row['soluong'];
                            $tong += $thanhtien;
                    ?>
                    <tr class="align-middle text-center">
                        <td>
                            <img src="../upload/<?php echo $row['hinhanh']; ?>" alt="Bánh" style="width: 70px; border-radius: 8px;">
                        </td>
                        <td><?php echo $row['tensp']; ?></td>
                        <td><?php echo $row['gia']; ?> VNĐ</td>
                        <td><?php echo $row['soluong']; ?></td>
                        <td class="fw-bold text-success"><?php  echo $thanhtien."VNĐ";   ?></td>
                        <td><?php echo $row['diachi']; ?></td>
                        <td><?php echo $row['sdt']; ?></td>
                        <td><?php echo $row['cuahang']; ?></td>
                        <td><?php echo $row['ngaydat']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr style="background: #e9f7ef;">
                        <td colspan="4" class="fw-bold text-end">TỔNG TIỀN:</td>
                        <td class="fw-bold text-success"><?php  echo $tong."VNĐ";   ?></td>
                        <td colspan="4" class="text-end">
                            <a href="javascript:history.back()" class="btn btn-success">Quay Lại</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>