<?php
include("../Model/orders.php");

if (isset($_POST['id_donhang']) && isset($_POST['trangthai'])) {
    $id = $_POST['id_donhang'];
    $trangthai = $_POST['trangthai'];

    $model = new orders();
    $model->updateTrangThai($id, $trangthai);

    echo "Cập nhật thành công";
} else {
    echo "Thiếu dữ liệu";
}
?>
