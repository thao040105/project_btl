
<?php
include("../Model/orders.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiembanhkeo";

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$donhang = new orders();

$result_ngay = $donhang->getDoanhThuNgay($conn);
$result_thang = $donhang->getDoanhThuThang($conn);
$result_nam = $donhang->getDoanhThuNam($conn);
?>

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
        .table thead th,
        .table thead td {
            color: #207244 !important;           /* Chữ xanh lá cây đậm */
            background-color: #f3f4f6 !important; /* Nền xám nhạt */
            font-weight: bold;
            font-size: 18px;
        }
        h4, h5, h2 {
            color: #207244 !important;
            font-weight: bold;
        }
        .table td a,
        .table td button,
        .table td {
            color: #207244;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
<?php include 'navbar.php'; ?>
    <div class="flex-grow-1 p-4">
        <h2 class="text-success text-center">Báo cáo Doanh Thu</h2>

    <h4 class="mt-5">📅 Doanh thu theo ngày</h4>
    <table class="table table-bordered">
        <thead class="table-success">
            <tr><th>Ngày</th><th>Số đơn</th><th>Doanh thu (đ)</th></tr>
        </thead>
        <tbody>
            <?php while ($row = $result_ngay->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['ngay'] ?></td>
                    <td><?= $row['so_don'] ?></td>
                    <td><?= number_format($row['doanhthu'], 0, ',', '.') ?> đ</td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h4 class="mt-5">📆 Doanh thu theo tháng</h4>
    <table class="table table-bordered">
        <thead class="table-warning">
            <tr><th>Tháng/Năm</th><th>Số đơn</th><th>Doanh thu (đ)</th></tr>
        </thead>
        <tbody>
            <?php while ($row = $result_thang->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['thang'] ?>/<?= $row['nam'] ?></td>
                    <td><?= $row['so_don'] ?></td>
                    <td><?= number_format($row['doanhthu'], 0, ',', '.') ?> đ</td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<h4 class="mt-5">📈 Doanh thu theo năm (Biểu đồ)</h4>
<canvas id="chartNam" height="100"></canvas>

<?php
// Chuẩn bị dữ liệu cho biểu đồ
$labels = [];
$dataDoanhThu = [];
$dataSoDon = [];

$result_nam->data_seek(0); // Đặt lại con trỏ kết quả nếu đã lặp ở trên

while ($row = $result_nam->fetch_assoc()) {
    $labels[] = $row['nam'];
    $dataDoanhThu[] = $row['doanhthu'];
    $dataSoDon[] = $row['so_don'];
}
?>

<script>
    const ctx = document.getElementById('chartNam').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($labels) ?>,
            datasets: [
                {
                    label: 'Doanh thu (VNĐ)',
                    data: <?= json_encode($dataDoanhThu) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Số đơn hàng',
                    data: <?= json_encode($dataSoDon) ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.7)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString() + ' đ';
                        }
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Thống kê Doanh thu & Số đơn theo năm'
                }
            }
        }
    });
</script>

    </div>
</div>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>