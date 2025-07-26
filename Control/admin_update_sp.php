<?php
include ("../Model/ttsp.php");
if(isset($_POST['sub_sp'])){
    if(empty($_POST['txtdanhmuc']) ||empty($_POST['txtten']) ||empty($_POST['txtgia']) ||empty($_POST['txtmota']) ||empty($_POST['txtsoluong'])){
        echo "<script>
        alert('Vui lòng nhập đủ thông tin');
        window.location.href = '../View/themsp.php';
        </script>"; 
        exit;
    }

    $model = new ttsp();
    $hinhanh = '';
    if(isset($_FILES['txthinhanh']) && $_FILES['txthinhanh']['error'] == 0){
        $hinhanh = $_FILES['txthinhanh']['name'];
        move_uploaded_file($_FILES['txthinhanh']['tmp_name'],'../upload/'.$hinhanh);
        $update = $model->update_sp2($_POST['id_sp'],$_POST['txtdanhmuc'],$_POST['txtten'],$_POST['txtgia'],$hinhanh,$_POST['txtmota'],$_POST['txtsoluong']);
    } elseif (!empty($_FILES['txthinhanh'])) {
        $update = $model->update_sp1($_POST['id_sp'],$_POST['txtdanhmuc'],$_POST['txtten'],$_POST['txtgia'],$_POST['txtmota'],$_POST['txtsoluong']);
    }
    if($update){
        echo "<script>
        alert('Cập nhật thành công');
        window.location.href = '../Admin/ql_sanpham.php';
        </script>";
    } else {
        echo "<script>
        alert('Cập nhật thất bại');
        
        </script>";
    }
    
}
?>